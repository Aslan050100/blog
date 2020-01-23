<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profession;
use App\Subject;
use App\University;
use App\Category;
use App\Specialty;
use DB;
use App;

class SpecialtyController extends Controller
{
    //
    // public function index(){
    // 	return view('blog.specialty');
    // }
    public function getSpecialty(Request $request,$id,$city,$level,$first_sub,$second_sub){
        //dd($level);
    	$specialties = DB::table('profession_specialty_view')->where('id',$id)->where('uni_city',$city)->where('uni_level','<=',$level)->distinct()->paginate(10);
    	//dd($specialties);
    	return view('blog.specialty',['specialties'=>$specialties,'city'=>$city,'level'=>$level,'pro_id'=>$id,'first_sub'=>$first_sub,'second_sub'=>$second_sub]);
    }
}
