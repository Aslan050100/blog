<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::match(['get','post'],'/',['uses'=>'BlogController@index','as'=>'blog.index']);

//Route::match(['get','post'],'/profession',['uses'=>'ProfessionController@index','as'=>'prof.index']);

// Route::match(['get','post'],'/specilaty',['uses'=>'SpecialtyController@index','as'=>'specilaty.index']);


// Route::match(['get','post'],'/university',['uses'=>'UniversityController@index','as'=>'university.index']);


// Route::get('/getprof','BeloController@allIndex');

// Route::get('/getsub','BeloController@getSubByProfession');

// Route::get('/universities','BeloController@universities');

Route::match(['get','post'],'getData',['uses'=>'ProfessionController@getData','as'=>'blog.getData']);

Route::match(['get','post'],'changeLang/{lang}',['uses'=>'ProfessionController@changeLang','as'=>'blog.changeLang']);

Route::match(['get','post'],'/getSpecialty/{id}/{city}/{level}/{first_sub}/{second_sub}',['uses'=>'SpecialtyController@getSpecialty','as'=>'blog.getSpecialty']);	

Route::match(['get','post'],'/getUniversity/{id}/{city}/{level}/{pro_id}/{first_sub}/{second_sub}',['uses'=>'UniversityController@getUniversity','as'=>'blog.getUniversity']);	

Route::match(['get','post'],'/solo_uni/{id}/{spe_id}/{pro_id}/{first_sub}/{second_sub}',['uses'=>'UniversityController@solo_uni','as'=>'blog.solo_uni']);	