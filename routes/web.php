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

Route::get('/', function () {
    return view('welcome');
})->name('home');


// =============================================
// BLOG PAGES ==================================
// =============================================

Route::get('/blog', function(){
    $posts = App\Post::all();
    return view('blog.category', compact('posts'));
})->name('blog.index');

Route::get('/blog/{category_id}',function($category_id){
    $posts = App\Post::where('category_id','=', $category_id)->firstOrFail();
    return view('blog.category',compact('posts'));
});

Route::get('/blog/article/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('blog.post', compact('post'));
})->name('blog.show');



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