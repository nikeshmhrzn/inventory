<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $categories = Category::all();
        
        return view('categories.index',compact('categories'));

    }


    public function create(){

        // dd('this is create function');
        return view('categories.create');
    }

    public function store(Request $request){
        // dd($request->all());
                
        $input = $request->all();
        // $input['status']=1;
        Category::create($input);

        return redirect(url('categories'));
    }

    public function edit($category){

        $category = Category::find($category);
        // dd($product);
        return view('categories.edit')->with('categories',$category);

    }

    public function update(Request $request, $category){

        $category = Category::find($category);

        $category->name = $request->get('name');
        $category->status = $request->get('status');
    

        $category->save();
        return redirect(url('categories'));

        // dd($request->all());

    }

    public function destroy($category){

        $category = Category::find($category);
        $category->delete();
        return redirect(url('categories'));
    }


}
