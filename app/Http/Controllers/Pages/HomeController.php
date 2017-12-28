<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class HomeController extends Controller
{
    public function index()
    {
    	$items = Item::all();
    	//dd($items);
    	return view('pages/home',['items' => $items]);
    }
}
