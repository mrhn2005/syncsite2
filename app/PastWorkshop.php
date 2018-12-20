<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class PastWorkshop extends Model
{
    use Sluggable;
    protected $guarded = [];
    
    
    public function participants(){
        return $this->hasMany('App\Participant','event_id');
    }
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
