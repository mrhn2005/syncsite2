<?php

namespace App\Http\Controllers;

use App\CmorghTeam;
use Illuminate\Http\Request;

class CmorghTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=CmorghTeam::orderBy('id','desc')->get();
        return view('admin.30morgh.teams',compact('teams'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CmorghTeam  $cmorghTeam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $team=CmorghTeam::find($id);
    
        return view('admin.30morgh.team',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CmorghTeam  $cmorghTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(CmorghTeam $cmorghTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CmorghTeam  $cmorghTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CmorghTeam $cmorghTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CmorghTeam  $cmorghTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(CmorghTeam $cmorghTeam)
    {
        //
    }
    public function allteams(){
        $teams=CmorghTeam::all();
        return view('allteams',compact('teams'));
    }
}
