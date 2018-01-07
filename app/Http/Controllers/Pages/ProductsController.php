<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Room;
use TCG\Voyager\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
    	return view('pages/products');
    }

    public function show($category, $room)
    {
      $items = Item::where('kategori',$category)
                    ->where('ruang',$room)->get();
                    
      return view('pages/products',['items'=>$items]);
    }
}
