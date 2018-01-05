<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Basket;

class CheckoutController extends Controller
{
    public function index()
    {

    	return view('pages/checkout');
    }
}
