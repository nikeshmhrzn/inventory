<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products =Product::all();
        
        return view('products.index',compact('products'));
    }


    public function create(){

        // dd('this is create function');
        return view('products.create');
    }

    public function store(Request $request){
        // dd($request->all());
                
                $input = $request->all();
        $input['user_id']=1;
        Product::create($input);

        return redirect(url('products'));
    }
}
