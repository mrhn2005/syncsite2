<?php

namespace App\Http\Controllers;

use App\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters=Master::all();
        return view('admin.30morgh.masters.masters',compact('masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('includes.30morgh.master.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->know){
           return redirect()->back();
       }
        $input=$request->all();
        if($file=$request->file('resume')){
                $name=time().$file ->getClientOriginalName();
                $file->move('cmorgh_user_uploaded/resume',$name);
                
                $input['resume']=$name;
                
            }
        
        Master::create($input);
        return redirect()->route('thankyou')->with([
           'success'=>'
           از ثبت نام شما  به عنوان منتور در یاس سپاس گزاریم.
           <br>
           به زودی با شما تماس گرفته خواهد شد.
           '
           ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        return view('admin.30morgh.masters.master',compact('master'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        //
    }
}
