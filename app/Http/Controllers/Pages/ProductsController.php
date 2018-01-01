<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
    	return view('pages/products');
    }

    public function show($room, $category)
    {

    }
}
