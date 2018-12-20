<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmorghTeam extends Model
{
    protected $fillable = [
        'customer', 'customer_need', 'customer_solution', 'opponent', 
        'opponent_advantage', 'cost', 'idea',
        'progress', 'file', 'team_name','resume','know','mode_id'
    ];
    public function members(){
        return $this->hasMany('App\CmorghTeamUser');
    }
    
    public function mode(){
        return $this->belongsTo('App\Mode');
    }
    
}
