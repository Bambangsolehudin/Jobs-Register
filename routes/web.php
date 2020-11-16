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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'FrontController@index');
Route::get('/front/{front}','FrontController@show');
// Route::get('/frontend/{id}/','FrontController@show');

Route::middleware('auth','admin')
        ->group(function () {
            Route::get('/dashboard', 'DashboardController@index'); 
            Route::get('/status/{status}', 'StatusController@index'); 
            Route::resource('posts', 'PostController');
            Route::resource('jobs', 'JobController');
            Route::resource('gallery', 'GalleryController');

        });



Auth::routes();






Route::get('/home', 'HomeController@index')->name('home');
