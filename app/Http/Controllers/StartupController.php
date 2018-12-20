<?php

namespace App\Http\Controllers;

use App\Startup;
use Illuminate\Http\Request;

class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startups=Startup::all();
        return view('admin.30morgh.startups.index',compact('startups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.30morgh.startups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'logo' => 'required',
        ]);
        $input=$request->all();
       
        if($file=$request->file('logo')){
            $name=time().$file ->getClientOriginalName();
            $file->move('photos/30morgh/startups',$name);
            $input['logo']=$name;
        }
        if($file=$request->file('photo_desc')){
                $name=time().$file ->getClientOriginalName();
                $file->move('photos/30morgh/startups/photo_desc',$name);
               $input['photo_desc']=$name;
            }
           $sartup=Startup::create($input);  
         return redirect()->route('startup.index')->with(['success'=>'
         استارتاپ با موفقیت ثبت شد.
         ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $startup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $startup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        
        if(!is_null($startup->logo)){
            if(file_exists(public_path() .'/photos/30morgh/startups/'. $startup->logo)){
                unlink(public_path() .'/photos/30morgh/startups/'. $startup->logo);}
        }
        if(!is_null($startup->photo_desc)){
            if(file_exists(public_path() .'/photos/30morgh/startups/photo_desc/'. $startup->photo_desc)){
                unlink(public_path() .'/photos/30morgh/startups/photo_desc/'. $startup->photo_desc);}
        }
         
        
        $startup->delete();
        
        return redirect()->back()->with(['success'=>'
        محصول مورد نظر حذف شد.
        ']);
    }
}
