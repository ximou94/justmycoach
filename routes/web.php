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

// =============================================
// STATIC PAGES ================================
// =============================================

Route::get('/', 'PageController@homePage')->name('home');

// =============================================
// BLOG PAGES ==================================
// =============================================

Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/blog/article/{slug}','BlogController@show')->name('blog.show');
Route::get('/blog/{category}','BlogController@showCategory')->name('blog.category');

// =============================================
// ADMIN PAGES =================================
// =============================================

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// =============================================
// PAGES =======================================
// =============================================

Route::get('{page}', 'PageController@showPage');
Route::get('{category}/{subpage?}', 'PageController@showSubPage');