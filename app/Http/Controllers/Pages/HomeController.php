<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class HomeController extends Controller
{
    public function index()
    {
      $items = Item::orderBy('created_at', 'desc')->paginate(8);
    	//dd($items);
    	return view('pages/home',['items' => $items]);
    }
}
