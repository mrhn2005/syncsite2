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
class ParticipantController extends Controller
{
    public function index(){
        $participants=Participant::orderBy('id','desc')->get();
        return view('admin.participant.index',compact('participants'));
    }
    
    public function form($slug){
        $event=PastWorkshop::where('slug',$slug)->first();
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
         ]);
        
         
        
            $factor_number = time();
            // $amount = $request->subtotal_amount;
            $amount=$participant->event->price*10;
            // return $amount;
            try {
                $pay = new Pay();
                $pay->amount($amount);
                $pay->factorNumber($factor_number);
                $pay->callback(url('/payment/verify'));
                $response = $pay->ready();
                
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
                 
                 
                    
                return $pay->start();
    
            } catch (\Exception $e) {
                return redirect()->back()->with(['fail'=>$e->getMessage()]);
                return $e->getMessage();
                
            }

        
        return $participant->event;
        
    }
 
 public function callback()
    {
        try {
            
            $pay = new Pay();
            $response = $pay->verify();
            
            if($response->status==1){
                    $participant=session('participant');
                    try{
                         Mail::to($participant->email)->bcc(['mrhn2005@gmail.com','h.goudarzyen@gmail.com'])->send(new ParticipantRegistered($participant));
                        // Mail::to($participant->email)->bcc('mrhn2005@gmail.com')->send(new ParticipantRegistered($participant));
                         Mail::to(['h.goudarzyen@gmail.com','zslesani@gmail.com'])->bcc('mrhn2005@gmail.com')->send(new ParticipantRegisteredAdmin($participant));
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
 

 
 
}
