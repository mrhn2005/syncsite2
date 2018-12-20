<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomaUpload extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'desc', 'file',
        
    ];
}
