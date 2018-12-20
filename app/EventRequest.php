<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRequest extends Model
{
    protected $fillable = [
        'organ', 'desc','name','location','time','duration','attendant',
        'min','max','goal' ,'model','history','number','audience','content',
        'first_name','last_name','background', 'phone', 'mobile','email','cost',
    ];
}
