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
use Log;
use Session;
class ProfessionController extends Controller
{
    //
    //  public function index(){
    // 	return view('blog.profession');
    // }

    public function getData(Request $request){
      $lang = Session::get('lang');
      $subjects = Subject::all();
      $specialties = Specialty::all();
      $universities = University::all();
      $professions = Profession::all();
   		$first_subject2 = $request->input('first_subject'); 
   		$second_subject2 = $request->input('second_subject');
      // Session::push('f_sub',$first_subject2);
      // $f_sub = Session::get('f_sub');
      // dd($f_sub);
      //dd($second_subject2);
   		$city = $request->input('city');
      $level = $request->input('level');
      //dd($level);

   		$category = $request->input('category');
      if($lang == 'ru'){
        $sub = Subject::where('first_subject',$first_subject2)->where('second_subject',$second_subject2)->select('id')->first();
        
        if(is_null($sub)){
          return redirect()->back();
        
        }else{
            $sub_id = $sub->id;
        }
      
         
        
        if($category == 'all'){
           $sphere = Category::all();
          $view = DB::table('profession_subject_view')->select('id')->where('sub_id',$sub_id)->get();


        }else{
          $sphere = Category::where('category_name',$category)->get();
        $sphere_id = $sphere[0]->id;
        $view = DB::table('profession_subject_view')->select('id')->where('spe_category',$sphere_id)->where('sub_id',$sub_id)->get();
        }
        $sub1 = $view->pluck('id');
        $list = [];
        foreach ($sub1 as $key => $val) {
          $profs = Profession::where('id',$val)->get();
          //dd($profs);
          $item = array('name' => $profs->pluck('pro_name'), 'id' => $profs->pluck('id'),'pro_des'=>$profs->pluck('pro_des'));
          array_push($list,$item);  
        }
      }elseif($lang == 'en'){
        $sub = Subject::where('first_subject_eng',$first_subject2)->where('second_subject_eng',$second_subject2)->select('id')->first();
       if(is_null($sub)){
          return redirect()->back();
        
        }else{
            $sub_id = $sub->id;
        }
        //dd($sub_id);
         
        
        if($category == 'all'){
           $sphere = Category::all();
          $view = DB::table('profession_subject_view')->select('id')->where('sub_id',$sub_id)->get();


        }else{
          $sphere = Category::where('category_name_eng',$category)->get();
        $sphere_id = $sphere[0]->id;
        $view = DB::table('profession_subject_view')->select('id')->where('spe_category',$sphere_id)->where('sub_id',$sub_id)->get();
        }
        $sub1 = $view->pluck('id');
        $list = [];
        foreach ($sub1 as $key => $val) {
          $profs = Profession::where('id',$val)->get();
          //dd($profs);
          $item = array('name' => $profs->pluck('pro_name_eng'), 'id' => $profs->pluck('id'),'pro_des'=>$profs->pluck('pro_desc_eng'));
          array_push($list,$item);  
        }
      }
      elseif($lang == 'kz'){
        $sub = Subject::where('first_subject_kaz',$first_subject2)->where('second_subject_kaz',$second_subject2)->select('id')->first();
        if(is_null($sub)){
          return redirect()->back();
        
        }else{
            $sub_id = $sub->id;
        }
         
        
        if($category == 'all'){
           $sphere = Category::all();
          $view = DB::table('profession_subject_view')->select('id')->where('sub_id',$sub_id)->get();


        }else{
          $sphere = Category::where('category_name_kaz',$category)->get();
        $sphere_id = $sphere[0]->id;
        $view = DB::table('profession_subject_view')->select('id')->where('spe_category',$sphere_id)->where('sub_id',$sub_id)->get();
        }
        $sub1 = $view->pluck('id');
        $list = [];
        foreach ($sub1 as $key => $val) {
          $profs = Profession::where('id',$val)->get();
          //dd($profs);
          $item = array('name' => $profs->pluck('pro_name'), 'id' => $profs->pluck('id'),'pro_des'=>$profs->pluck('pro_des'));
          array_push($list,$item);  
        }
      }

   		return view('blog.profession',['professions'=>$list,'city'=>$city,'level'=>$level,'first_sub'=>$first_subject2,'second_sub'=>$second_subject2]);
   	}

    public function changeLang($lang){
        if($lang == 'kz'){
         Session::put('lang','kz');
         $qwe = Session::get('lang');
         //dd($qwe);
          
        }
        elseif($lang == 'ru'){
          Session::put('lang','ru');
           
        }
        elseif($lang == 'en'){
           Session::put('lang','en');
      
        }
        return redirect()->back();
    }

  
}
