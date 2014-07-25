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

Route::get('/book-thoughts', function(){
	return View::make('book-thoughts');
});

Route::get('/inquiry-on-human-understanding', function(){
	return View::make('inquiry-on-human-understanding');
});

Route::get('/the-rules', function(){
	return View::make('the-rules');
});

Route::get('/your-lifestyle-has-already-been-designed', function(){
	return View::make('your-lifestyle-has-already-been-designed');
});

Route::get('/lean-in', function(){
	return View::make('lean-in');
});

Route::get('/what-every-body-is-saying', function(){
	return View::make('what-every-body-is-saying');
});

Route::get('/project-three', function(){
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