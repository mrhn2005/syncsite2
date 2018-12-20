<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GhoghnoosService extends Model
{
    protected $fillable = [
        'manager','company','service','phone','email','website',
    ];
}
