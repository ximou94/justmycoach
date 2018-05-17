<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;

class PageController extends Controller
{
    //

    public function showPage($page)
    {
    	$page = Page::where('slug', '=', $page)->firstOrFail();
    	return view('pages.main', compact('page'));
    }

    public function showSubPage($category,$subpage)
    {
    	$slug = $category.'/'.$subpage;
    	$formatedCategory = str_replace('-', ' ', $category);
    	$formatedCategory2 = ucfirst($formatedCategory);
		$page = Page::where('slug', '=', $slug)->firstOrFail();
    	return view('pages.subpage', compact('page','category','formatedCategory2'));    	
    }

    public function homePage()
    {
        $lastPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.home',compact('lastPosts'));
    }

}
