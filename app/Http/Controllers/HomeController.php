<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\TeamSubmitted;
use App\Mail\WorkshopRequested;
use App\Mail\ContentUploaded;
use App\Mail\GardeshkarRequested;
use App\Mail\EventRequested;
use App\Mail\ServiceRequested;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;

use App\BlogPost;
use App\Event;
use App\Mode;
use App\Mentor;
use App\Workshop;
use App\PastWorkshop;
use App\Startup;
use App\GhoghnoosService;
use App\CmorghTeam;
use App\CmorghTeamUser;
use App\EventRequest;
use App\HomaUpload;
use App\WorkshopRequest;
use App\GardeshkarRequest;
use App\Visit;
use App\Toofan;
use App\Group;

use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Api;
use App\Gallery;

use Request as Req;
use Session;
class HomeController extends Controller
{
    
    
    public function home(){
        // $this->vmsTelegram('hi');
        // Telegram::sendMessage([
        //     'chat_id' =>"-221592990",
        //     'text' => "hi"
        // ]);
        $startups=Startup::all();
        $posts=BlogPost::orderBy('id', 'desc')->take(2)->get();
        $mentors=Mentor::all();
        return view('welcom3',compact('mentors','posts','startups'));
    }
    
    public function hodhod(){
        $events=Event::all();
        $workshops_past=PastWorkshop::where('event','1')->get();
        return view('hodhod',compact('events','workshops_past'));
    }
    
    public function homa(){
        $mentors=Mentor::all();
        $workshops=Workshop::all();
        $workshops_past=PastWorkshop::where('event','0')->get();
        return view('homa',compact('mentors','workshops','workshops_past'));
    }
    
    public function ghoghnoos(){
        $mentors=Mentor::all();
        return view('ghoghnoos',compact('mentors'));
    }
    
    public function cmorgh(){
        $startups=Startup::where('active','1')->get();
        return view('30morgh',compact('startups'));
    }
    
    public function cmorgh_register(){
       
        return view('register-30morgh1');
    }
    
    public function trainer_register(){
        $modes=Mode::all();
        return view('register.trainer_register',compact('modes'));
    }
    public function trainer_mode_register($mode){
        $mmode=Mode::where('id',$mode)->first();
        
        if($mode!=1&&$mode!=2&&$mode!=3&&$mode!=4){
            return redirect()->route('trainer.register');
        }
        return view('register.trainer_mode_register',compact('mmode'));
    }
    
   public function add_team(Request $request){
    //   if(!$request->customer){
    //       return redirect()->back();
    //   }
       $input=$request->all();
       if($file=$request->file('file')){
                $name=time().$file ->getClientOriginalName();
                $file->move('cmorgh_user_uploaded',$name);
                
                $input['file']=$name;
                
            }
        if($file=$request->file('resume')){
                $name=time().$file ->getClientOriginalName();
                $file->move('cmorgh_user_uploaded/resume',$name);
                
                $input['resume']=$name;
                
            }
        
        $team=CmorghTeam::create($input);
         $number=count($request->name);
         
        //  if(isset( $request->name[$number])){
        //      return 'true';
        //  } 
         
      for($i=0;$i<$number;$i++){
          $head=0;
           if(isset( $request->name[$i])){
               if($i==0){
                   $head=1;
               }
             $member = new CmorghTeamUser([
                 'name' => $request->name[$i],
                 'email' => $request->email[$i],
                 'phone' => $request->phone[$i],
                 'city' => $request->city[$i],
                 'university' => $request->university[$i],
                 'birthday' => $request->birthday[$i],
                 'head' => $head,
                 ]);
                  $team->members()->save($member);
                 
            }
            
      }
    //   $when = \Carbon\Carbon::now()->addSeconds(15);
    try{
      Mail::to('30morgh@yasidea.ir')->cc(['kiumarsi@yasidea.ir','mreyhanian@yasidea.ir'])
      ->bcc('mrhn2005@gmail.com')->send(new TeamSubmitted($team)) ;
    //   Mail::to('mrhn2005@gmail.com')->send(new TeamSubmitted($team)) ; 
    }
    //     try{
    //   Mail::to('mrhn2005@gmail.com')->send(new TeamSubmitted($team)) ;}
       catch (\Exception $e){
           
          return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت نام شما  در پیش شتابدهی سیمرغ سپاسگزاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]); 
      }
       return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت نام شما  در پیش شتابدهی سیمرغ سپاسگزاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
   }
   
   public function thankyou(){
       return view('thankyou-30morgh');
   }
   
 
  
  public function  hodhod_request(){
       
        return view('includes/hodhod/gardeshkar/register-gardeshkar');
    }
  
   public function hodhod_register(){
       
        return view('register-event');
    }
    
    
    public function ghoghnoos_register(){
       
        return view('includes/ghoghnoos/register/register-service');
    }
    
    public function homa_register(){
       
        return view('includes/homa/workshop-request/register-workshop');
    }
    
    public function add_event(Request $request){
        $input=$request->all();
        $event=EventRequest::create($input);
        
        // try{
        // Mail::to('hodhod@yasidea.ir')->cc(['info@yasidea.ir','mreyhanian@yasidea.ir'])
        //   ->bcc('mrhn2005@gmail.com')->send(new EventRequested( $event));}
        try{
        Mail::to('mrhn2005@gmail.com')->send(new EventRequested( $event));}
        catch (\Exception $e){
               return $e;
           return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت رویداد شما در هدهد سپاس گذاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
            ]);
        } 
       return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت رویداد شما در هدهد سپاس گذاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
       ]);
   }
   
 public function homa_workshop_request(Request $request){
       $input=$request->all();
        $workshop=WorkshopRequest::create($input);
        
        // try{
        // Mail::to('homa@yasidea.ir')->cc(['info@yasidea.ir','mreyhanian@yasidea.ir'])
        //   ->bcc('mrhn2005@gmail.com')->send(new WorkshopRequested($workshop));}
         try{
          Mail::to('mrhn2005@gmail.com')->send(new WorkshopRequested($workshop));}
          catch (\Exception $e){
              
          return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت درخواستتان سپاسگزاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
        }
       return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت درخواستتان سپاسگزاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
    }
  public function add_gardeshkar(Request $request){
       $input=$request->all();
        $gardeshkar=GardeshkarRequest::create($input);
        // $when = \Carbon\Carbon::now()->addSeconds(15);
         // try{
        // Mail::to('hodhod@yasidea.ir')->cc(['info@yasidea.ir','mreyhanian@yasidea.ir'])
        //   ->bcc('mrhn2005@gmail.com')->send(new GardeshkarRequested($gardeshkar));}
        try{
        Mail::to('mrhn2005@gmail.com')->send(new GardeshkarRequested($gardeshkar));}
        catch (\Exception $e){
            //   return $e;
           return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت درخواستتان سپاسگذاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
        } 
         
       return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت درخواستتان سپاسگذاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
    }
    public function add_service(Request $request){
        $input=$request->all();
        $service=GhoghnoosService::create($input);
       
        // try{
        // Mail::to('ghoghnoos@yasidea.ir')->cc(['info@yasidea.ir','mreyhanian@yasidea.ir'])
        //   ->bcc('mrhn2005@gmail.com')->send(new ServiceRequested($service));}
        try{
        Mail::to('mrhn2005@gmail.com')->send(new ServiceRequested($service));}
        catch (\Exception $e){
               return $e;
        return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت درخواستتان سپاسگذاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
        } 
        return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت درخواستتان سپاسگذاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
    }
     
    public function homa_upload(){
       
        return view('upload-homa');
    }
    
    public function homa_add(Request $request){
       $input=$request->all();
       if($file=$request->file('file')){
                $name=time().$file ->getClientOriginalName();
                $file->move('homa_user_uploaded',$name);
                
                $input['file']=$name;
                
            }
        
        $content=HomaUpload::create($input);
        
        // try{
        // Mail::to('homa@yasidea.ir')->cc(['info@yasidea.ir','mreyhanian@yasidea.ir'])
        //   ->bcc('mrhn2005@gmail.com')->later($when, new ContentUploaded($content));}
        $when = \Carbon\Carbon::now()->addSeconds(15);
        try{
        Mail::to('mrhn2005@gmail.com')->send(new ContentUploaded($content));}
        catch (\Exception $e){
            //   return $e;
            return redirect()->route('thankyou')->with([
           'success'=>'
از ارسال محتویاتتان در حوزه کارآفرینی برای یاس بسیار سپاسگذاریم
           '
           ]);
        } 
         

       return redirect()->route('thankyou')->with([
           'success'=>'
از ارسال محتویاتتان در حوزه کارآفرینی برای یاس بسیار سپاسگذاریم
           '
           ]);
   }
   
    public function hodhod_event(Request $request){
      $event = Event::where('name_eng', $request->name_eng)->first();
     
      return view('includes.hodhod.events.event',compact('event'));
    }
   
   
    public function blog(){
       $posts=BlogPost::orderBy('id','desc')->paginate(3);
       $titles=BlogPost::orderBy('id','desc')->get();
    //   foreach($posts as $post){
    //         $post->desc=$this->shortenText($post->desc,30);
    //     }
       return view('blog.blog',compact('posts','titles'));
    }
   
    public function blog_post(Request $request, $id){
      $post = BlogPost::where('slug',$id)->orWhere('id',$id)->firstOrFail();
      
      $posts=BlogPost::orderBy('id','desc')->get();  
      return view('blog.post',compact('post','posts'));
    }
   
    private function shortenText($text,$words_count){
        $text=strlen(strip_tags(html_entity_decode($text)));
        if(str_word_count($text,0)>$words_count){
            $words=str_word_count($text,2);
            $pos=array_keys($words);
            $text=substr($text,0,$pos[$words_count]).'...';
        }
        return $text;
    }
    private function vmsTelegram($text){
        $token="474519939:AAG5rMmZ3WtfKCVtUnp_hoTshxPUt9HSX98";
        $chat_id="-221592990";
        // $url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text".$text."";
        $url="https://api.telegram.org/bot474519939:AAG5rMmZ3WtfKCVtUnp_hoTshxPUt9HSX98/sendMessage?chat_id=-221592990&text=salamdustan";
        $update = file_get_contents($url);
        print_r($update);
    }
    
    
    public function toofan(Request $request){
        $visit=new Visit;
        $visit->session_id=session()->getId();
        $visit->ip=Req::ip();
        
        $visit->cookie= Cookie::get('visited');
        if(array_key_exists('HTTP_REFERER', $_SERVER)){
            // return Req::server('HTTP_REFERER');
            $visit->referer=$_SERVER["HTTP_REFERER"];
        }
        
        if(isset($request->team)){
            $visit->group_id=$request->team;
        }
        $visit->save();
        // $cookie=0;
        // $cookie = Cookie::make('visited',1, 600000);
        // dd(Cookie::get('visited'));
        $visit_id=$visit->id;
        $response = new \Illuminate\Http\Response(view('toofan.register',compact('visit_id')));
        $response->withCookie(cookie('visited',1, 600000));
        return $response;
        return view('toofan.register');
    }
    
    
    public function toofan_register(Request $request){
        Toofan::create($request->all());
        
        return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت نام شما  در یاس سپاسگزاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]); 
    }
    
    
    public function toofan_ranking(){
        $groups=Group::all();
        $visits=[];
        $i=0;
        foreach($groups as $group){
            $visits[$i]=$group->visits->where('cookie',Null)->unique('ip')->unique('session_id')->count();
            $i=$i+1;
        }
        return view('toofan.ranking',compact('groups'));
        return $groups->sortBy('UniqueVisits');
    }
}
