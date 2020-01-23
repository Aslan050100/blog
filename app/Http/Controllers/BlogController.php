<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;
use App\Subject;
use App\University;
use App\Category;
use App\Specialty;
use App;
use Session;

class BlogController extends Controller
{
    //
    public function index(){
        //dd(123);
        //App::setlocale('en');
        //Session::put('lang',$lang);
        $lang = Session::get('lang');
        //dd($lang);
    	//$professions = Profession::paginate(10);
    	$subjects = Subject::distinct()->get();

    	//dd($subjects[0]->first_subject);
    	$first_subject = [];
    	$second_subject = [];
        //dd($lang);
        if($lang == 'ru'){
           foreach ($subjects as $key => $subject) {
            array_push($first_subject,$subject->first_subject);
            array_push($second_subject,$subject->second_subject);
            }

            $universities = University::all();

            $city = [];
            foreach ($universities as $key => $university) {
                array_push($city,$university->uni_city);
            }

            $categories = Category::all();

            $category_name = [];
            foreach ($categories as $key => $category) {
                array_push($category_name,$category->category_name);
            }
        }
        elseif($lang == 'en'){
            //dd(123);
            foreach ($subjects as $key => $subject) {
            array_push($first_subject,$subject->first_subject_eng);
            array_push($second_subject,$subject->second_subject_eng);
            }

            $universities = University::all();

            $city = [];
            foreach ($universities as $key => $university) {
                array_push($city,$university->uni_city_eng);
            }

            $categories = Category::all();

            $category_name = [];
            foreach ($categories as $key => $category) {
                array_push($category_name,$category->category_name_eng);
            }
        }
        elseif($lang == 'kz'){
            foreach ($subjects as $key => $subject) {
            array_push($first_subject,$subject->first_subject_kaz);
            array_push($second_subject,$subject->second_subject_kaz);
            }

            $universities = University::all();

            $city = [];
            foreach ($universities as $key => $university) {
                array_push($city,$university->uni_city_kaz);
            }

            $categories = Category::all();

            $category_name = [];
            foreach ($categories as $key => $category) {
                array_push($category_name,$category->category_name_kaz);
            }
        }
    	

    	
    	return view('blog.index2',['first_subjects'=>array_unique($first_subject),
    								'second_subjects'=>array_unique($second_subject),'cities'=>array_unique($city),'categories'=>$category_name]
    );
    }

   	

}
