<?php
namespace Aries\Seppay\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {

    protected $fillable = [
        'amount',
        'transId',
        'factorNumber',
        'participant_id',
        'status'
    ];
    
    public function participant(){
        return $this->belongsTo('App\Participant');
    }
    public function payable()
    {
        return $this->morphTo();
    }
}