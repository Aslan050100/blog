<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';

     public function specialties()
    {
        return $this->belongsToMany('App\Specialty','specialty_subject','subject_id','specialty_id');
    }
}
