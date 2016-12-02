<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//    return view('welcome')->with('name','Jim');
//});

Route::get('/hello/{name?}', function ($name = '') {
   // return view('welcome');
    return view('welcome')->with('name',$name);
});

Route::get('/', 'WelcomeController@index');

Route::get('contact','WelcomeController@contact');
Route::get('about','PagesController@about');

//Route::get('foo',function()	{return 'Bar';});

Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::post('articles','ArticlesController@store');
Route::get('articles/{id}','ArticlesController@show');

 