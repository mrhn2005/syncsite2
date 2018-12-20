<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Gallery extends Model
{
    use Translatable;
    protected $translatable = ['title'];
    
    public function photos(){
        return $this->hasMany('App\GalleryPhoto');
    }
}
