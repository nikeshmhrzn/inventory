<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products =Product::where('user_id',auth()->id())->get();
        
        return view('products.index',compact('products'));

    

    }


    public function create(){

        $categories = Category::all();

        // dd($categories->toArray());
        return view('products.create',compact('categories'));
    }

    public function store(Request $request){
        // dd($request->all());
                
        $input = $request->all();
        $input['user_id']= auth()->id();
        Product::create($input);

        return redirect(url('products'));
    }

    public function edit($product){

            $product = Product::find($product);
            $categories = Category::all();
            // dd($product);
            return view('products.edit')->with('product',$product)->with('categories',$categories);

        }

        public function update(Request $request, $product){

            $product = Product::find($product);

            $product->name = $request->get('name');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $product->category_id = $request->get('category_id');

            $product->save();
            return redirect(url('products'));

            // dd($request->all());

        }

        public function destroy($product){

            $product = Product::find($product);
            $product->delete();
            return redirect(url('products'));
        }

        
}
