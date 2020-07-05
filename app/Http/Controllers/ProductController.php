<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

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
}
