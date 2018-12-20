<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Aries\Seppay\Models\Transaction;

class Participant extends Model
{
    protected $guarded = [];
    
    public function event(){
        return $this->belongsTo('App\PastWorkshop','event_id');
    }
    
    public function transaction(){
        return $this->hasOne('Aries\Seppay\Models\Transaction','participant_id');
    }
}
