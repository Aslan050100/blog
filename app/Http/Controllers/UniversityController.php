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

class UniversityController extends Controller
{
    //
    // public function index(){
    // 	return view('blog.university');
    // }
    public function getUniversity(Request $request,$id,$city,$level,$pro_id,$first_sub,$second_sub){
    	$universities = DB::table('university_specialty_view')->where('spec_id',$id)->where('uni_city',$city)->where('uni_level','<=',$level)->paginate(10);
    	//dd($universities);
        $spe_code_is = Specialty::where('id',$id)->select('spe_code')->first();
       $spe_code = $spe_code_is->spe_code;

    	return view('blog.university',['unis'=>$universities,'spe_id'=>$spe_code,'pro_id'=>$pro_id,'first_sub'=>$first_sub,'second_sub'=>$second_sub]);
    }

    public function solo_uni($id,$spe_id,$pro_id,$first_sub,$second_sub){
        $uni_id = $id;
        //dd($spe_id);
    	$solo = University::where('id',$id)->first();
        $bindings = [
           'p1'  => $first_sub,
           'p2' => $second_sub,
           'p3'  => $pro_id,
           'p4'  => $spe_id,
           'p5'  => $uni_id
        ];
        
        DB::executeProcedure('addrequestlog', $bindings);
    	return view('blog.solo_uni',['uni'=>$solo]);
    }
}
