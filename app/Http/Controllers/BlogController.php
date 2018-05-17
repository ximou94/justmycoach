<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class BlogController extends Controller
{
    public function showCategory($category)
    {
    $category_id = Category::where('slug', "=" , $category)->first()->id;
    $posts = Category::find($category_id)->posts()->orderBy('created_at','desc')->get();
    $categories = $this->getAllCategories();
    $categorySEO = Category::select('meta_title','meta_description')->where('slug','=' ,$category)->first();

    return view('blog.category',compact('posts','categories','categorySEO'));
    }

    public function getAllCategories()
    {
    	$categories = Category::withCount('posts')->get();
    	return $categories;
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = $this->getAllCategories();

        return view('blog.category', compact('posts','categories'));
    }

    public function show($slug)
    {
        $categories = $this->getAllCategories();
        $post = Post::where('slug', '=', $slug)->firstOrFail();

        return view('blog.post', compact('post','categories'));
    }
}
