<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$layout = 'temptime';
    return view('home', compact('layout'));
});

Route::get('job-seekers', function(){
	return view('pages.job-seekers');
});

Route::get('about', function(){
	return view('pages.about');
});

Route::get('contact', function(){
	return view('pages.contact');
});

Route::get('employers', function(){
	return view('pages.employers');
});

Route::get('job-openings', function(){
	$jobs = App\Opening::all();
	return view('pages.job-openings', compact('jobs'));
});

Route::resource("openings","OpeningController");

