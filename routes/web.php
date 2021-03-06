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

Route::get('candidates', 'CandidatesSiteController@create');
Route::post('candidates/store', 'CandidatesSiteController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show/{id}', 'HomeController@show')->name('show');
Route::get('/show/{id}/resume', 'HomeController@resume')->name('resume'); 