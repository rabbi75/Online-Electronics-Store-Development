<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product; 

class ProductsController extends Controller
{
    public function index()
    {
    	$products=Product::orderBy('id', 'desc')->paginate(8);
    	return view('Frontend.pages.product.index', compact('products'));
    }
    
    public function show($slug){
        $product= Product::where('slug',$slug)->first();
        if (!is_null($product)) {
          return view('Frontend.pages.product.show', compact('product'));
        }else{
          // session::flash('error', 'Sorry there is no product by this URL...');
          return redirect()->route('products');
        }
    }
}
