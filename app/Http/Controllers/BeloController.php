<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Subject;
use App\University;
use DB;
use App\Profession;

class BeloController extends Controller
{
	public function allIndex()
	{
		for ($i=0; $i <20 ; $i++) { 
			$this->index($i);
		}
		
	}
    public function index($id)
    {
    	$subjects = Subject::all();
    	$specialties = Specialty::all();
       
    	$list = [];
    	foreach ($subjects[$id]->specialties as $key => $specialties) {
    		$profs = $specialties->professions->pluck('pro_name');
    		foreach ($profs as $key => $prof) {
    			array_push($list,$prof);
    		}
    		
    	}

    	print("<h4>".$subjects[$id]->first_subject." - ".$subjects[$id]->second_subject."</h4>"."<br>");

    	foreach ($list as $key => $value) {
    		print($value);
    		print("<br>");
    	}
    	
    	//dd($subjects[$id]->first_subject,$subjects[$id]->second_subject,$list);
    

    }

    public function getSubByProfession()
    {

    	$i = 1;
    	$professions = Profession::all();
    	foreach ($professions as $key => $profession) {
    		$specialties = $profession->specialties;
    		if($profession->pro_name == null)
    			print("null<br>");
    		foreach ($specialties as $key => $specialty) {
    			$subjects = $specialty->subjects;
    			
    			
    			$q = $subjects[0]->first_subject.":".$subjects[0]->second_subject;

    			

    			print($q."<br>");
    			break;
    		}
    		$i++;

    	}
    	
    }

    public function universities()
    {   
        $u = University::get('uni_name');
        foreach ($u as $key => $value) {
            print($value->uni_name."<br>");
        }
    }
}
