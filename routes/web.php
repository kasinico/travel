<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function (){
  return view('dashboard');
});

Route::get('/profile', function(){
	return view('profile');
});

Route::get('/calendar', function(){
	return view('calendar');
});

//input income item route
Route::get('/all', function(){
	return view('all');
});

Route::get('/add', function(){
	return view('add');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('file','FileController@create');

Route::post('file','FileController@store');
Route::get('/create', function(){
	return view('create');
});

Route::get('user/{id}', 'ShowProfile');
// If you want route to just show a certain view, don't create a Controller method, just use
//Route::view('about', 'texts.about');

//home
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//income input
Route::post('/', 'incomesController@store')->name('incomes.store');
Route::get('/all', 'incomesController@index')->name('all');

Route::get('/{id}/show', 'incomesController@show')->name('show');