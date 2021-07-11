@extends('backend.layouts.master')
@section('content')      
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-header">
            Edit Product
          </div>
          <div class="card-body">
            @include('backend.partials.messages')
            <form method="post" action="{{ route('backend.product.update', $product->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $product->title }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="description" rows="8" cols="80" class="form-control">{{ $product->description }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $product->price }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Select Category</label>
                <select class="form-control" name="category_id">
                  <option value="">Please select a category for the product</option>
                  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                    <option value="{{ $parent->id }}" {{ $parent->id == $product->category->id ? 'selected': '' }}>{{ $parent->name }}</option>

                    @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                      <option value="{{ $child->id }}"  {{ $child->id == $product->category->id ? 'selected': '' }}> ------> {{ $child->name }}</option>

                    @endforeach

                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Select Brand</label>
                <select class="form-control" name="brand_id">
                  <option value="">Please select a brand for the product</option>
                  @foreach (App\Models\Brand::orderBy('name', 'asc')->get() as $br)
                    <option value="{{ $br->id }}" {{ $br->id == $product->brand->id ? 'selected' : '' }}>{{ $br->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="product_image">Product Image</label>
                <!-- for one img inset -->
                <!-- <input type="file" name="product_image" class="form-control"> -->
                <!-- for multiple image insert start -->
                <div class="row">
                  <div class="col-md-4">
                    <input type="file" name="product_image[]" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <input type="file" name="product_image[]" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <input type="file" name="product_image[]" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <input type="file" name="product_image[]" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <input type="file" name="product_image[]" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021 <a href="{{ route('index') }}" target="_blank">Tiger</a>. All rights reserved.</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection