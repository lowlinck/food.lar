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

Route::group(['namespace'=> 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

// Route::group(['namespace'=> 'Blog'], function () {
//     Route::get('/blogs', 'BlogController@index')->name('blog.index');
//  });
 Route::get('/blogs', 'App\Http\Controllers\Blog\BlogController@index')->name('blogs.index');

 Route::post('/resizes', 'Blog\BlogController@resizes')->name('blogs.resizes');

    Route::resource('/artical', 'Blog\ArticalController');
    Route::post('/resize', 'Blog\ArticalController@resizes')->name('article.resize');
    Route::get('/video', function () {
        return view('video');
    });

Auth::routes();
