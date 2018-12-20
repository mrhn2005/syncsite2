<?php

Route::get('/home1', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('team')->user();

    //dd($users);

    return view('team.home');
})->name('home1');

