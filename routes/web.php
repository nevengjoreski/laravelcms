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

// GET REQUESTS
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});


//Messages
Route::get('/messages', 'MessagesController@getMessages');
Route::post('/contact/submit', 'MessagesController@submit');

//TODOs
Route::resource('todo', 'TodosController');

Auth::routes();

Route::get('/admin', 'HomeController@index');
