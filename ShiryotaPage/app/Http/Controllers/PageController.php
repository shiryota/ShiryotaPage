<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PageController extends Controller
{
    //
    public function index(){
        $items = Portfolio::all();
        return view('home.index',['items' => ($items)]);
    }
}
