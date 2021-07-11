<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Brand;
use Image;
use File;

class BrandsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $brands=Brand::orderBy('id','desc')->get();
    //Another display rols
    return view('backend.pages.brands.index', compact('brands'));
  }
  public function create()
  {
    return view('backend.pages.brands.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'image' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3000',
    ]);
    $brand = new Brand();
    $brand->name=$request->name;
    $brand->description=$request->description;
    // inser images also
    // if (count($request->image)>0) {
    //       $image = $request->file('image');
    //       $img = time().'.'.$image->getClientOriginalExtension();
    //       $location=public_path('images/brands/' .$img);
    //       Image::make($image)->save($location);
    //       $brand->image = $img;
    //
    // }
    if ($request -> hasFile('image')) {
    	$image = $request->file('image');
    	$img = time().'.'.$image->getClientOriginalExtension();
    	$location=public_path('images/brands/' .$img);
    	Image::make($image)->save($location);
    	$brand->image=$img;
  }
    $brand->save();
    session()->flash('success', 'A new brand has added successfully.');
    return redirect()->route('backend.brands');

  }

  public function edit($id){
    $brand=Brand::find($id);
    if (!is_null($brand)) {
      return view('backend.pages.brands.edit', compact('brand'));
    }else{
      return redirect()->route('backend.brands');
    }
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'name' => 'required',
      'image' => 'required',
      'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3000',
    ]);
    
    $brand = Brand::find($id);
    $brand->name=$request->name;
    $brand->description=$request->description;
    // inser images also
    if ($request -> hasFile('image')) {
      // delete the old image from folder
      if (File::exists('images/brands/'.$brand->image)) {
        file::delete('images/brands/'.$brand->image);
      }
      $image = $request->file('image');
      $img = time().'.'.$image->getClientOriginalExtension();
      $location=public_path('images/brands/' .$img);
      Image::make($image)->save($location);
      $brand->image=$img;
  }
    $brand->save();
    session()->flash('success', 'Brand has updated successfully.');
    return redirect()->route('backend.brands');
  }

  public function delete($id)
  {
    $brand = Brand::find($id);
    if (!is_null($brand)) {
      // Delete brand image
      if (File::exists('images/brands/'.$brand->image)) {
        File::delete('images/brands/'.$brand->image);
      }
      $brand->delete();
    }
    session()->flash('success', 'Brand has deleted successfully !!');
    return back();

  }



}
