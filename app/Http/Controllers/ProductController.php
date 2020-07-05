<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /*
     * List Products
     * */
    public function index(){
        $products = Product::orderBy('id','DESC')->paginate();
        return view('products.index', compact('products'));
    }
    /*
     * Show Product
     * */
    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
    /*
     * Destroy Product
     * */
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with("info","Product was deleted successfully");
    }
    /*
     * Edit Product
     * */
    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    /*
     * Create Product
     * */
    public function create(){
        return view('products.create');
    }
    /*
     * Create Product
     * */
    public function store(ProductRequest $request){
        $product = new Product;
        $product->name = $request->name;
        $product->short = $request->short;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index')->with('info','The product was created successfully');
    }
    /*
     * Update Product
     * */
    public function update(ProductRequest $request,$id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->short = $request->short;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index')->with('info','The product was updated successfully');
    }
}
