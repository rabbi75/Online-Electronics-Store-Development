<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product; 
use App\Models\Brand; 
use App\Models\Category; 
use App\Models\Slider;
use Image; 

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        $categories=Category::orderBy('name','desc')->where('parent_id', NULL)->get();
        $brands=Brand::orderBy('id','desc')->get();
        $products=Product::orderBy('id','desc')->get();
        $sliders = Slider::orderBy('priority', 'asc')->get();
    	return view('Frontend.pages.index', compact('sliders','categories','brands','products'));
    }
    public function contact()
    {
        return view('Frontend.pages.contact');
    }
    public function todayoffer()
    {
        return view('Frontend.pages.todayoffer');
    }
    public function search(Request $request)
    {
      $search = $request->search;

        $products = Product::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%')
        ->orWhere('quantity', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(8);

        return view('Frontend.pages.product.search', compact('search', 'products'));
    }
}
