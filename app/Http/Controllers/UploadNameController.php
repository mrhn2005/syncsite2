<?php

namespace App\Http\Controllers;

use App\UploadName;
use Illuminate\Http\Request;

class UploadNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload_names=UploadName::all();
        
        return view('admin.startups.upload-name',compact('upload_names'));
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
        $upload_name=new UploadName();
        $upload_name->name=$request->name;
        $upload_name->save();
        return redirect()->back()->with([
            'success'=>'
             عنوان فایل افزوده شد.
            '
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UploadName  $uploadName
     * @return \Illuminate\Http\Response
     */
    public function show(UploadName $uploadName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UploadName  $uploadName
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadName $uploadName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UploadName  $uploadName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadName $uploadName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UploadName  $uploadName
     * @return \Illuminate\Http\Response
     */
    public function destroy($uploadName)
    {
        
        $upload_name=UploadName::where('id',$uploadName)->first();
         $upload_name->delete();
        return redirect()->back()->with([
            'success'=>'
            عنوان فایل حذف شد
            '
            ]);
    }
}
