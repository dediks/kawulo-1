<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Basket;

class HeaderController extends Controller
{
    public function index()
    {
      $user = User::find(1);
      $baskets = Basket::where('id_user', $user);
      $total = 0;

      foreach($basket as $basket){
        $total += $basket->total;
      }

      return ('layouts.header', ['total'=>$total]);
    }
}
