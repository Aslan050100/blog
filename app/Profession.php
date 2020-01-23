<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use DB;

class Profession extends Eloquent
{
    //
    protected $table = 'profession';

    public function specialties()
    {
        return $this->belongsToMany('App\Specialty','profession_specialty','profession_id','specialty_id');
    }
    
}
