<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Item;
use App\Basket;

class CheckoutController extends Controller
{
    public function index()
    {
      $user = User::find(1);
      $items = DB::table('items')
                   ->join('baskets', 'items.id', 'baskets.id_barang')
                   ->join('users', 'users.id', 'baskets.id_user')
                   ->select('items.*', 'baskets.banyak')
                   ->where('users.id', $user->id)
                   ->get();

    	return view('pages/checkout', ['items'=>$items]);
    }

    public function show()
    {
      return view('pages/checkout');
    }
}
