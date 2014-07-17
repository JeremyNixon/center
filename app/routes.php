<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('landing');
});


Route::get('/lorem-ipsum', function(){
	return View::make('lorem-ipsum');
});


Route::get('/lorem-ipsum/{num}', function($num)
{
    $data['num'] = $num;

    return View::make('lorem-ipsum', $data);
});

Route::get('/user-generate', function(){
	return View::make('user-generate');
});

Route::get('/user-generate/{num}', function($num)
{
    $data['num'] = $num;

    return View::make('user-generate', $data);
});