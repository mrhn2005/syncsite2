<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Task;
use App\Team;
use App\Upload;
use Morilog\Jalali\Facades\jDate;
class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:team', ['only' => ['tasks']]);
        // Alternativly
        $this->middleware('auth:admin', ['except' => ['tasks']]);
    }
    public function tasks(){
        $team=Auth::guard('team')->user();
        $projects = $team->tasks->where('status',1);
           
        // return  collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->only(['foo']);
        if($projects->count()>0){
            
               $projects = $projects->map(function ($item) {
                return ['label' => $item['name'],
                        'start' => $item['begin'],
                        'end' => $item['end'],
                        ];
            }); 
            $gantt = new \Swatkins\LaravelGantt\Gantt($projects->toArray(), array(
                'title'      => 'فعالیتها',
                'cellwidth'  => 25,
                'cellheight' => 35
            ));
        }
        else{
             $gantt='';
        }
        
         
        
        return view('team.home',compact('team','gantt'));
    }
    
    public function teams(){
        $teams=Team::all();
        return view('admin.startups.index',compact('teams'));
    }
    public function teams_show(Team $team){
        $today = \Carbon\Carbon::today();
        $projects = $team->tasks->where('status',1);
        // $projects = $projects1->filter(function ($user) {
        //     return $user->created_at > \Carbon\Carbon::today()->subDays(2) || $user->status == 1;
        // });
        // return  collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->only(['foo']);
        if($projects->count()>0){
            
               $projects = $projects->map(function ($item) {
                return ['label' => $item['name'],
                        'start' => $item['begin'],
                        'end' => $item['end'],
                        ];
            }); 
            $gantt = new \Swatkins\LaravelGantt\Gantt($projects->toArray(), array(
                'title'      => 'فعالیتها',
                'cellwidth'  => 25,
                'cellheight' => 35
            ));
        }
        else{
             $gantt='';
        }
        
        return view('admin.startups.show',compact('team','gantt'));
    }
    
    public function tasks_create(Team $team){
        
        return view('admin.startups.create',compact('team'));
    }
    
    public function tasks_store(Request $request){
        Task::create($request->all());
        $team=Team::where('id',$request->team_id)->first();
        return redirect()->route('admin.teams.show',$team)->with([
            'success'=>'
            فعالیت جدید با موفقیت افزوده شد.
            '
            ]);
    }
    
    public function task_approve(Task $task){
        $task->status=1;
        $task->save();
        return redirect()->back()->with([
            'success'=>'
            فعالیت تایید گردید.
            '
            ]);
    }
    
    public function task_disapprove(Task $task){
        $task->status=0;
        $task->save();
        return redirect()->back()->with([
            'success'=>'
            فعالیت رد شد.
            '
            ]);
    }
    
    public function teams_upload(Team $team){
        
        return view('admin.startups.uploads',compact('team'));
    }
    
    public function teams_upload_opinion(Request $request, $upload){
        $upload=Upload::where('id',$upload)->first();
        $upload->opinion=$request->opinion;
        $upload->save();
        return redirect()->back()->with([
            'success'=>'
                نظر با موفقیت ثبت شد.
            '
            ]);
    }
    
    public function teams_task_opinion(Request $request, $task){
        $task=Task::where('id',$task)->first();
        $task->opinion=$request->opinion;
        $task->save();
        return redirect()->back()->with([
            'success'=>'
                نظر با موفقیت ثبت شد.
            '
            ]);
    }
}
