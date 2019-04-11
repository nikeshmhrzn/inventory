<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(){
        $products =Product::all();
        dd($products);
        return view('products.index',compact('products'));
    }
}
