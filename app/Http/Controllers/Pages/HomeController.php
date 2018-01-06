<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class HomeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
      $max = Item::count();
      $items = Item::where('id','>',$max-4)->get();
    	//dd($items);
    	return view('pages/home',['items' => $items]);
=======
    	$items = Item::all();
    	$coba = Item::find(1);
    	// dd($coba);
    	return view('pages/home',['items' => $items, 'coba' => $coba]);
>>>>>>> master
    }
}
