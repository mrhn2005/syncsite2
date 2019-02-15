<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Aries\Seppay\Models\Transaction;

class Participant extends Model
{
    protected $guarded = [];
    
    protected $appends = [
        'Status',
    ];
    
    public function event(){
        return $this->belongsTo('App\PastWorkshop','event_id');
    }
    
    public function transaction(){
        return $this->hasOne('Aries\Seppay\Models\Transaction','participant_id');
    }
    
    
    public function getStatusAttribute(){
        if(count($this->transaction)>0){
            if($this->transaction->status>0){
                return 1;
            }
            return 0;
        }
        return 0;
    }
}
