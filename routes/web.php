<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\User;

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


Auth::routes();



Route::post('/follow/{user}','followscontroller@store');

Route::get('/profile/{user}', 'profilescontroller@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'profilescontroller@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'profilescontroller@update')->name('profile.update');

Auth::routes();

Route::get('/', 'viewcontroller@home');
Route::get('/about', 'viewcontroller@about');
Route::get('/contact', 'viewcontroller@contact');



Route::get('/project/create','projectController@create');
Route::get('/makephoto/{id}','projectController@create_photo');
Route::post('/project/add','projectController@store');
Route::post('/project/add_photo/{id}','projectController@store_photos');
Route::get('/project/{id}', 'projectController@index');


//Route::get('/p/create', 'postscontroller@create');
Route::get('/p/{post}', 'postscontroller@show');
Route::post('/p', 'postscontroller@store');

Route::post('/m', 'admincontroller@message');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return view('welcome');
});
