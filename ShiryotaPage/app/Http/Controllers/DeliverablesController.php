<?php

namespace App\Http\Controllers;

use App\Models\Deliverables;
use Illuminate\Http\Request;

class DeliverablesController extends Controller
{
    public function index(Request $request)
    {
        $items = Deliverables::all();
        return view('home.index',['items' => ($items)]);
    }
}
