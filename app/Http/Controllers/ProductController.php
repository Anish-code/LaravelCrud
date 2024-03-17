<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();

        return view("products.index", ["products"=> $products]);
    }
    public function create(){
        return view("products.create");
        
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif,webp'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product = new Product();
        $product->name = $request->name;
        $product->image = $imageName;
        $product->description = $request->description;

        $product->save();

        return back()->withSuccess('Product is created !!!');
    }

    public function edit($id){
        $product = Product::where('id',$id)->first();

        return view('products.edit', ['product'=> $product]);

    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif,webp'
        ]);
        $product = Product::where('id', $id)->first();
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;

        }
        $product->name = $request->name;
        
        $product->description = $request->description;

        $product->save();

        return back()->withSuccess('Product is updated !!!');
    }

    public function destroy(Request $request, $id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product is deleted !!!');

    }

    public function description($id){
        $product = Product::where('id',$id)->first();
        return view('products.description', ['product'=> $product]);

    }
}
