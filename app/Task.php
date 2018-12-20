<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Facades\jDate;
class Task extends Model
{
    protected $guarded=[];
    
     protected $appends = [
        'begin',
        'end',
    ];
    public function team(){
        return $this->belongsTo('App\Team');
    }
    public function getBeginAttribute(){
        $parts = explode('/', $this->begin_date);
        $year=$parts[2];
        $month= $parts[1];
        $day= $parts[0];
        $gdate= \Morilog\Jalali\jDateTime::toGregorian($year, $month, $day);
        $gdates=$gdate[0].'-'.$gdate[1].'-'.$gdate[2];
        $time = strtotime($gdates);
        $newformat = date('Y-m-d',$time);
        return $this->attributes['begin'] = $newformat;
    }
    public function getEndAttribute(){
        $parts = explode('/', $this->end_date);
        $year=$parts[2];
        $month= $parts[1];
        $day= $parts[0];
        $gdate= \Morilog\Jalali\jDateTime::toGregorian($year, $month, $day);
        $gdates=$gdate[0].'-'.$gdate[1].'-'.$gdate[2];
        $time = strtotime($gdates);
        $newformat = date('Y-m-d',$time);
        return $this->attributes['end'] = $newformat;
    }
}
