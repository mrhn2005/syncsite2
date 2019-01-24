<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    protected $appends = [
        'visitor',
    ];
    
    public function visits(){
      return $this->hasMany('App\Visit');  
    }
    
    // public function unique_visits(){
    //     return $this->visits->where('cookie',Null)->unique('ip')->unique('session_id')->count();
    // }
    
    public function getVisitorAttribute(){
        
        $visits= $this->visits->where('cookie','!=',1)->unique('ip')->unique('session_id')->count();
        
        return $this->attributes['visitor']=$visits;
    }
    
}
