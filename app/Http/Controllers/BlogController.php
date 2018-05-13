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
    $posts = Category::find($category_id)->posts;
    //$category = Category::where('slug', '=', $category);
    //$posts = $category->posts();
    $categories = $this->getAllCategories();
    return view('blog.category',compact('posts','categories','categorieCount'));
    }

    public function getAllCategories()
    {
    	$categories = Category::withCount('posts')->get();
    	return $categories;
    }
}
