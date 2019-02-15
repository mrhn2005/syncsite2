<?php

namespace App\Http\Controllers;
use App\Mail\ParticipantRegistered;
use App\Mail\ParticipantRegisteredAdmin;
use App\Participant;
use Illuminate\Http\Request;
use App\PastWorkshop;
use Aries\Seppay\Pay;
use Aries\Seppay\Models\Transaction;
use Illuminate\Support\Facades\Mail;

use Zarinpal\Laravel\Facade\Zarinpal;

use App\Promocode;
class ParticipantController extends Controller
{
    public function index(){
        $participants=Participant::orderBy('id','desc')->get();
        return view('admin.participant.index',compact('participants'));
    }
    
    public function form($slug){
        $event=PastWorkshop::where('slug',$slug)->first();
        if(count($event->participants()->where('status',1))>$event->max_participants){
            return redirect()->route('thankyou')->with(['success'=>'
             متاسفانه ظرفیت شرکت در این رویداد تمام شده است.
            ']);
        }
        return view('participant.register',compact('event'));
    }
    
    
    public function register(Request $request){
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'know'=>'required'
        ]);
        
        
        

        
        
        $participant=Participant::create($request->all());
        
        
        session([
             'participant'=>$participant
            ]);
         
    
        $factor_number = time();
        // $amount = $request->subtotal_amount;
        $amount=$participant->event->price*10;
        
        
        if(!empty($request->promocode)){
            $code=$request->promocode;
            
            $promocode = Promocode::where('code',$code)->first();
          
            // $promocode->customers()->attach( Auth::guard('customer')->user()->id);
            if ($promocode === null) {
                return redirect()->back()->with(['fail' => '
                کد وارد شده اشتباه است.
                ']);
                // return '
                // کد وارد شده اشتباه است.
                // ';
            }
            if($promocode->isExpired()){
                return redirect()->back()->with(['fail' => '
                این کد منقضی شده است.
                ']);
            }
    
            if($promocode->uses>=$promocode->max_uses){
                return redirect()->back()->with(['fail' => '
                متاسفانه ظرفیت استفاه از این کد تمام شده است.
                ']);
            }
    
            $amount = $promocode->event->price;
            if ($promocode->is_fixed){
                if ($amount<$promocode->order_amount){
                     return response()->json(['error' => '
                        حداقل مبلغ خرید مورد نیاز برای این کد تخفیف
                '.$promocode->order_amount.'
                    تومان می باشد.
                '], 404);  
                }
                $discount= $promocode->discount_amount;
            }else
            {
                if ($amount>$promocode->order_amount){
                    $discount= $promocode->discount_amount*$promocode->order_amount/100;
                }
                else{
                   $discount= $promocode->discount_amount*$amount/100; 
                }
                
                // $arr = str_split($subtotal, "3"); // break string in 3 character sets
                // $price_new_text = implode(",", $arr); 
                
            }
            $amount=($amount-$discount)*10;
            
        }
        if($amount==0){
                 if(!empty($participant->promocode)){
                            
                            $code=Promocode::where('code',$participant->promocode)->first();
                            $code->uses=$code->uses+1;
                            $code->save();
                            
                        }
                        $transaction=Transaction::create([
                'amount'        =>  $amount,
                'transId'       =>  1,
                'factorNumber'  =>  $factor_number,
                'participant_id'  =>  $participant->id,
                'status' =>"SUCCESS",
            ]);
                return redirect()->route('thankyou')->with(['success'=>'
                     پرداخت شما با موفقیت انجام شد.
                     از ثبت نام شما سپاسگزاریم.
                     <br>'.'
                     کد رهگیری:
                     <br>'.$factor_number
                         ]);
             }
        // return $amount;
        try {
            $results = Zarinpal::request(
                url('/payment/verify'),          //required
                $amount/10,                                  //required
                'مرکز نوآوری یاس'               //required
            );
            // $pay = new Pay();f
            // $pay->amount($amount);
            // $pay->factorNumber($factor_number);
            // $pay->callback(url('/payment/verify'));
            // $response = $pay->ready();
            // session([
            //  'Authority' => $results['Authority'],
            //  'amount' =>$amount,
            //  'factornumber' => $factor_number,
            //  'participant'=>$participant
            // ]);
            
            $transaction=Transaction::create([
                'amount'        =>  $amount,
                'transId'       =>  $results['Authority'],
                'factorNumber'  =>  $factor_number,
                'participant_id'  =>  $participant->id
            ]);
            
            //  return session('transaction');
            /*
             * do anything you want with $response Object
             * Like: store Transaction ID on your cart with: $response->transId;
             */
             
             Zarinpal::redirect(); // redirect user to zarinpal
            
                // after that verify transaction by that $results['Authority']
            //  Zarinpal::verify('OK',1000,$results['Authority']);
                
            // return $pay->start();

        } catch (\Exception $e) {
            return redirect()->back()->with(['fail'=>$e->getMessage()]);
            return $e->getMessage();
            
        }

        
        return $participant->event;
        
    }
 
    public function callback()
    {
        try {
            
            $factorNumber=session('factornumber');
            
            if ($_GET['Status'] == 'OK') {
                $transId=$_GET['Authority'];
                $transaction=Transaction::with('participant')->where('transId',(int)$transId)->first();
                $result=Zarinpal::verify($_GET['Status'],$transaction->amount/10,$_GET['Authority']);
                
                $participant=$transaction->participant;
                
                $transaction->status="SUCCESS";
                $transaction->update();
                // return session('amount')/10;
                if($result['Status'] == "success"){
                    
                        if(!empty($participant->promocode)){
                            
                            $code=Promocode::where('code',$participant->promocode)->first();
                            $code->uses=$code->uses+1;
                            $code->save();
                            
                        }
                        try{
                            //  Mail::to($participant->email)->bcc(['mrhn2005@gmail.com','h.goudarzyen@gmail.com'])->send(new ParticipantRegistered($participant));
                            Mail::to($participant->email)->bcc('mrhn2005@gmail.com')->send(new ParticipantRegistered($participant));
                            Mail::to(['info@yasidea.ir'])->bcc('mrhn2005@gmail.com')->send(new ParticipantRegisteredAdmin($participant));
                            // session()->forget('participant');
                        }catch(\Exception $e){
                            
                        }
                        
                     return redirect()->route('thankyou')->with(['success'=>'
                     پرداخت شما با موفقیت انجام شد.
                     از ثبت نام شما سپاسگزاریم.
                     <br>'.'
                     کد رهگیری:
                     <br>'.$transaction->factorNumber
                         ]);
                }
            }
                
            return redirect()->back()->with(['fail'=>'خطا در انجام عملیات']);
            
        } catch (\Exception $e) {

            return redirect()->back()->with(['fail'=>$e->getMessage()]);
            return $e->getMessage();
        }
    }
 
    
    public function check_code(Request $request){
        
        $code=$request->code2;
        
        $promocode = Promocode::where('code',$code)->first();
      
        // $promocode->customers()->attach( Auth::guard('customer')->user()->id);
        if ($promocode === null) {
            return response()->json(['error' => '
            کد وارد شده اشتباه است.
            '], 404);
            // return '
            // کد وارد شده اشتباه است.
            // ';
        }
        if($promocode->isExpired()){
            return response()->json(['error' => '
            این کد منقضی شده است.
            '], 404);
        }

        if($promocode->uses>=$promocode->max_uses){
            return response()->json(['error' => '
            متاسفانه ظرفیت استفاه از این کد تمام شده است.
            '], 404);
        }

        $amount = $promocode->event->price;
        if ($promocode->is_fixed){
            if ($amount<$promocode->order_amount){
                 return response()->json(['error' => '
                    حداقل مبلغ خرید مورد نیاز برای این کد تخفیف
            '.$promocode->order_amount.'
                تومان می باشد.
            '], 404);  
            }
            $discount= $promocode->discount_amount;
        }else
        {
            if ($amount>$promocode->order_amount){
                $discount= $promocode->discount_amount*$promocode->order_amount/100;
            }
            else{
               $discount= $promocode->discount_amount*$amount/100; 
            }
            
            // $arr = str_split($subtotal, "3"); // break string in 3 character sets
            // $price_new_text = implode(",", $arr); 
            
        }
        $subtotal=$amount-$discount;
        // $price_new_text=number_format($subtotal);
        $price_new_text=($subtotal);
            return ['discount'=>$discount,'subtotal'=>$price_new_text,'promocode'=>$code];
            
        
        
    }
 
 
}
