<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardeshkarRequest extends Model
{
    protected $fillable = [
        'organ','time','goal','audience','desc','first_name','last_name','phone','email'
        
    ];
}
