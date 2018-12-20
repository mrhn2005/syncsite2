<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\UploadName;
use App\Upload;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Api;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads=Auth::guard('team')->user()->uploads;
        $upload_names=UploadName::all();
        
        return view('team.uploads.index',compact('upload_names','uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_id=Auth::guard('team')->user()->id;
        if($file=$request->file('upload')){
            $path = $request->file('upload')->store($team_id);
        }
        $upload=new Upload;
        $upload->path=$path;
        $upload->team_id=$team_id;
        $upload->name_id=$request->upload_name;
        $upload->save();
        Telegram::sendMessage([
            'chat_id' =>"-221592990",
            'text' => "فایل جدید در سایت آپلود شد \n نام تیم: ".$upload->team->name."\n نام فایل: ".$upload->upload_name->name."\nدانلود فایل:\n http://yasidea.ir/storage/app/".$upload->path
        ]);
        return redirect()->back()->with([
            'success'=>'
           فایل با موفقیت آپلود شد.
            '
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
