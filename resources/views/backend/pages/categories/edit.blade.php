@extends('backend.layouts.master')
@section('content')      
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-header">
            Edit Category
          </div>
          <div class="card-body">
            @include('backend.partials.messages')
            <form action="{{ route('backend.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @include('backend.partials.messages')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $category->name }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description (optional)</label>
                <textarea name="description" rows="8" cols="80" class="form-control">{{ $category->description }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Parent Category (optional)</label>
                <select class="form-control" name="parent_id">
                  <option value="">Please select a primary category</option>

                  @foreach($main_categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }} >{!! $cat->name !!}</option>
                  @endforeach

                </select>
              </div>
              <div class="form-group">
                <label for="oldimage">Category Old Image</label></br>

                    <img src="{!! asset('images/categories/'. $category->image) !!}" width="100" height="150"></br>
                    <label for="oldimage">Category New Image (optional)</label>
                    <input type="file" class="form-control" name="image" id="image">
              </div>

              <button type="submit" class="btn btn-success">Update Category</button>
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