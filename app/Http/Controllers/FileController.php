<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:team,admin');
    }

    public function __invoke($file_path)
    {
        if (!Storage::disk('local')->exists($file_path)) {
            abort(404);
        }
        $pieces = explode("/", $file_path );
        $team_id=$pieces[0];
        if(Auth::guard('admin')->check()){
             $local_path = config('filesystems.disks.local.root') . DIRECTORY_SEPARATOR . $file_path;

            return response()->file($local_path);
        }
        if($team_id==Auth::guard('team')->user()->id){
            $local_path = config('filesystems.disks.local.root') . DIRECTORY_SEPARATOR . $file_path;

            return response()->file($local_path);
        }
        abort(404);
    }
}
