<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopRequest extends Model
{
    protected $fillable = [
        'organ','desc','location','time','goal','audience',
        'subject','first_name','last_name','phone','email'
    ];
}
