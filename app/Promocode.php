<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    protected $guarded = [];
    // public $timestamps = false;
    public function isExpired()
    {
        // return $this->expires_at ? Carbon::now()->gte($this->expires_at) : false;
        // return diffInDays(Carbon::now(),Carbon::parse($this->expires_at))<0 ? true : false;
        // return Carbon::parse($this->expires_at)->gte(Carbon::now());
        return Carbon::parse($this->expires_at) ? Carbon::now()->gte(Carbon::parse($this->expires_at)) : 0;
    }
    
    public function event(){
        return $this->belongsTo('App\PastWorkshop','event_id');
    }
}
