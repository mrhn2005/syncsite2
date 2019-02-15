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
         'participant' => $participant,
         'promocode' =>$request->promocode,
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
        
        // return $amount;
        try {
            $results = Zarinpal::request(
                "url('/payment/verify')",          //required
                $amount/10,                                  //required
                'مرکز نوآوری یاس'               //required
            );
            // $pay = new Pay();
            // $pay->amount($amount);
            // $pay->factorNumber($factor_number);
            // $pay->callback(url('/payment/verify'));
            // $response = $pay->ready();
            
            $transaction=Transaction::create([
                'amount'        =>  $amount,
                'transId'       =>  $response->transId,
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
             Zarinpal::verify('OK',1000,$results['Authority']);
                
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
            
            // $pay = new Pay();
            // $response = $pay->verify();
            $response=Zarinpal::verify('OK',1000,$results['Authority']);
            return $resoonse;
            if($response->status==1){
                    $participant=session('participant');
                    try{
                        //  Mail::to($participant->email)->bcc(['mrhn2005@gmail.com','h.goudarzyen@gmail.com'])->send(new ParticipantRegistered($participant));
                        Mail::to($participant->email)->bcc('mrhn2005@gmail.com')->send(new ParticipantRegistered($participant));
                        //  Mail::to(['h.goudarzyen@gmail.com','zslesani@gmail.com'])->bcc('mrhn2005@gmail.com')->send(new ParticipantRegisteredAdmin($participant));
                        session()->forget('participant');
                    }catch(\Exception $e){
                        
                    }
                    
                   
                 return redirect()->route('thankyou')->with(['success'=>'
                 پرداخت شما با موفقیت انجام شد.
                 از ثبت نام شما سپاسگزاریم.
                 <br>'.'
                 کد رهگیری:
                 <br>'.$participant->transaction->factorNumber
                     ]);
            }
            /*
             * if verification was successful you can send order for your customer
             */
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
