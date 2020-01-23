<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'specialty';

    public function subjects()
    {
        return $this->belongsToMany('App\Subject','specialty_subject','specialty_id','subject_id');
    }

    public function professions()
    {
        return $this->belongsToMany('App\Profession','profession_specialty','specialty_id','profession_id');
    }

    public function specialties()
    {
        return $this->belongsToMany('App\Specialty','specialty_subject','specialty_id','subject_id');
    }
      public function universities()
    {
        return $this->belongsToMany('App\University','specialty_university','specialty_id','university_id');
    }
}
