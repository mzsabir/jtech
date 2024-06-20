<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /* display all products */
    function index(){
        $products=Product::all();
        return view('product.index',compact('products'));
    }

    /* display create form */
    function create(){
        return view('product.create');
    }

     /* Add new Product */
    function add(Request $req){
        $req->validate([
            'name'=>'required|min:3',
            'model'=>'required',
            'price'=>'min:500|integer'
        ]);
        $imageName='';
        $slug=Str::slug($req->name);
        $imageName = $slug.'.'.$req->picture->extension();
        $req->picture->storeAs('Products', $imageName);

        Product::create([
            'name'=>$req->name,
            'model'=>$req->model,
            'price'=>$req->price,
            'picture'=>$imageName,
        ]);
        
        return redirect('product/index');
    }

     /* Display Edit Product form */
     function edit(){
        return view('product.edit');
     }

     /* update product */
     function update(){
        
     }

     /* delete product */
     function delete(){
        
     }
}
