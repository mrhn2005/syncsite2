<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class BlogPost extends Model
{
    use Sluggable;
    use \Conner\Tagging\Taggable;
    protected $guarded=['tags'];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
