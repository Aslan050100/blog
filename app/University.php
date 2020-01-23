<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $table = 'university';
     
    public function specialties()
    {
        return $this->belongsToMany('App\Specialty','specialty_university','university_id','specialty_id');
    }
}
