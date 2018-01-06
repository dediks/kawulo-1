<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class SingleController extends Controller
{
    public function index()
    {
    	return view('pages/single');
    }

<<<<<<< HEAD
    public function show($id)
    {
      $item = Item::find($id);
    	return view('pages/single', ['item'=>$item]);
=======
    public function show($id){
    	$blogs = Item::find($id);
    	return view('pages/single', ['blogs' => $blogs]);
>>>>>>> master
    }
}
