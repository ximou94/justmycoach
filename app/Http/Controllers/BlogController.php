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
    return view('blog.category',compact('posts'));
    }
}
