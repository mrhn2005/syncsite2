<?php

namespace App\Http\Controllers;

use App\PastWorkshop;
use Illuminate\Http\Request;

class PastWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastWorkshops=PastWorkshop::all();
        return view('admin.homa.workshops.index',compact('pastWorkshops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homa.workshops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if($file=$request->file('poster')){
                $name=time().$file ->getClientOriginalName();
                $file->move('photos/homa/past_workshops/',$name);
                $input['poster']=$name;
                //return $input;
            }
            // $input['active']=1;
            PastWorkshop::create($input);
            return redirect()->route('workshop.index')->with(['success'=>'
            کارگاه با موفقیت اضافه شد.
        ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PastWorkshop  $pastWorkshop
     * @return \Illuminate\Http\Response
     */
    public function show(PastWorkshop $pastWorkshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PastWorkshop  $pastWorkshop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop=PastWorkshop::where('id',$id)->first();
        return view('admin.homa.workshops.edit',compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PastWorkshop  $pastWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $workshop=PastWorkshop::where('id',$id)->first();
         $input=$request->all();
        if($file=$request->file('poster')){
            if(file_exists(public_path() .'/photos/homa/past_workshops/'. $workshop->poster)){
                unlink(public_path() .'/photos/homa/past_workshops/'. $workshop->poster);}
                $name=time().$file ->getClientOriginalName();
                $file->move('photos/homa/past_workshops/',$name);
                $input['poster']=$name;
                //return $input;
            }
            // $input['active']=1;
            $workshop->update($input);
            return redirect()->route('workshop.index')->with(['success'=>'
            کارگاه با موفقیت اضافه شد.
        ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PastWorkshop  $pastWorkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $pastWorkshop=PastWorkshop::where('id',$id)->first();
        if(!is_null($pastWorkshop->poster)){
            if(file_exists(public_path() .'/photos/homa/past_workshops/'. $pastWorkshop->poster)){
                unlink(public_path() .'/photos/homa/past_workshops/'. $pastWorkshop->poster);}
        }
         
        $pastWorkshop->delete();
        
        return redirect()->back()->with(['success'=>'
        کارگاه مورد نظر حذف شد.
        ']);
    }
    
    public function update_active(Request $request,$id){
       $pastWorkshop=PastWorkshop::where('id',$id)->first();
       $pastWorkshop->active=0;
       $pastWorkshop->update();
       return redirect()->route('workshop.index')->with(['success'=>'
           وضعیت کارگاه به روز شد.
        ']);
    }
}
