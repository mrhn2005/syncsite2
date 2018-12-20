<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Api;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task=Task::create($request->all());
        Telegram::sendMessage([
            'chat_id' =>"-221592990",
            'text' => "فعالیت جدید به سایت اضافه شد \n نام تیم: ".$task->team->name."\nعنوان فعالیت: ".$task->name."\nتاریخ شروع: ".$task->begin_date."\nتاریخ اتمام: ".$task->end_date."\nمشاهده فعالیت:\n http://yasidea.ir/admin/teams/show/".$task->team->id
        ]);
        return redirect()->route('team_home')->with([
            'success'=>'
            فعالیت جدید با موفقیت افزوده شد.
            '
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        if($task->status==2){
            return view('team.tasks.edit',compact('task'));
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        if($task->status==2){
            
            $task->update($request->all());
                return redirect()->route('team_home')->with([
                    'success'=>'
                    فعالیت با موفقیت ویرایش شد.
                    '
            ]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
