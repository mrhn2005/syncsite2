<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    protected $appends = [
        'UniqueVisits',
    ];
    
    public function visits(){
      return $this->hasMany('App\Visit');  
    }
    
    public function unique_visits(){
        $this->visits->where('cookie',Null)->unique('ip')->unique('session_id')->count();
    }
    
    public function getUniqueVisitsAttribute(){
        $visits= $this->visits->where('cookie',Null)->unique('ip')->unique('session_id')->count();
        
        return $this->attributes['UniqueVisits']=$visits;
    }
    
}
