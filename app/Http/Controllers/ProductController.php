<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view("products.index",["products"=> $products]);
    }
    public function create(){
        return view("products.create");
    }
    public function store(Request $request){
        $data= $request->validate([
            "name" => "required",
            "qty" => "required|numeric",
            "price" => "required|decimal:0,1",
            "des" => "nullable"
        ]);
        $newproduct = Product::create($data);
        
        return redirect(route("product.index"));
    }
    public function show(){
        return view("products.create");
    }
    public function delete(){
        return view("products.delete");
    }
    public function del(Request $request){
        $product = Product::find($request->id);
        $product->delete();
        return redirect()->route("product.index");

    }
    
}
