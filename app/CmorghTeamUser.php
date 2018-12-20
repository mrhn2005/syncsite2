<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmorghTeamUser extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'cmorgh_team_id', 'head','city','university','birthday'
        
    ];
    public function team(){
        $this->belongsTo('App\CmorghTeam');
    }
}
