<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Image;
use TCG\Voyager\Models\Category;

class SingleController extends Controller
{
    public function index()
    {
    	return view('pages/single');
    }

    public function show($id)
    {
      $item = Item::find($id);
      // $category = Item::select('kategori')->where('id',$item->id)->first()->get();
      $others = Item::where('kategori',$item->kategori)->where('id','<>',$item->id)->get();
      $images = Image::where('id_barang',$item->id)->first();
      // dd($gambar);
    	return view('pages/single', ['item'=>$item, 'others'=>$others, 'images'=>$images]);
    }
}
