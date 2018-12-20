<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    
    public function upload_name(){
        return $this->belongsTo('App\UploadName','name_id');
    }
    
     public function team(){
        return $this->belongsTo('App\Team');
    }
}
