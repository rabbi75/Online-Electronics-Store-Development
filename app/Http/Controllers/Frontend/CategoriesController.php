<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category($id)
    {
        $category = Category::find($id);
        if ($category) {
          return view('Frontend.pages.categories.test', compact('category'));
        }else {
          session()->flash('errors', 'Sorry !! There is no category by this ID');
          return redirect('/');
        }
    }
    public function show($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
          return view('Frontend.pages.categories.show', compact('category'));
        }else {
          session()->flash('errors', 'Sorry !! There is no category by this ID');
          return redirect('/');
        }
    }

}
