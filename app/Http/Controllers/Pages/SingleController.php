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

    public function show($id)
    {
      $item = Item::find($id);
    	return view('pages/single', ['item'=>$item]);
    }
}
