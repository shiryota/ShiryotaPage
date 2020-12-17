<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function blog(){
        $items = Blog::all();
        return view('blog',['items' => ($items)]);
    }

    public function blogFullPage($url){
        $item = Blog::UrlEqual($url)->first();
        $param = ['input' => $url, 'item' => $item];
        return view('blogFullPage', $param);
    }
}
