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
    	$coba = Item::find(1);
    	// dd($coba);
    	return view('pages/home',['items' => $items, 'coba' => $coba]);
    }
}
