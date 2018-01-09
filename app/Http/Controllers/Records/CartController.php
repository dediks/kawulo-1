<?php

namespace App\Http\Controllers\Records;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Basket;
use App\User;

class CartController extends Controller
{
    public function show($id)
    {
      $user = User::find(1); //user id temporary
      $item = Item::find($id);

      $basket = Basket::firstOrNew(
        ['id_barang' => $item->id]
      );

      $basket->id_barang = $item->id;
      $basket->id_user = $user->id;
      $basket->banyak = $basket->banyak+1;
      $basket->total = $item->harga * $basket->banyak;
      $basket->save();

      $item->stock = $item->stock-1;
      $item->save();

      // return view('pages/single', ['item'=>$item]);
      return redirect()->back();
    }

    public function kurang(Request $request)
    {
       DB::table('baskets')
           ->where('id_barang', $request->id)
           ->delete();

      $basket = DB::table('baskets')->get();
      $jumlahBasket = $basket->count();
      $totalBasket = DB::table('baskets')->sum('total');

      return response()->json(['semuaData' => $basket, 'jumlahBasket' => $jumlahBasket, 'totalBasket' => $totalBasket, 'ongkir'=>0.07*$totalBasket,
      'diskon'=>0.09*$totalBasket, 'totalBayar'=>($totalBasket-(0.09*$totalBasket)+(0.07*$totalBasket))]);
    }

    public function clear()
    {
      $items = DB::table('items')
                   ->join('baskets', 'items.id', 'baskets.id_barang')
                   ->join('users', 'users.id', 'baskets.id_user')
                   ->select('items.*', 'baskets.banyak')
                   ->get();

      foreach ($items as $item) {
        DB::table('items')
            ->where('id', $item->id)
            ->update(['stock' => $item->stock + $item->banyak]);
      }

      $user = User::find(1);
      DB::table('baskets')
          ->where('id_user', $user->id)
          ->delete();

      return redirect()->back();
    }
}
