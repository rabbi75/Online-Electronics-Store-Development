@extends('backend.layouts.master')
@section('content')      
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-header">
            Edit Division
          </div>
          <div class="card-body">
            @include('backend.partials.messages')
            <form action="{{ route('backend.division.update', $division->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @include('backend.partials.messages')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $division->name }}">
              </div>
              <div class="form-group">
                <label for="priority">Priority</label>
                <input type="text" class="form-control" name="priority" id="priority" aria-describedby="emailHelp" value="{{ $division->priority }}">
              </div>


              <button type="submit" class="btn btn-success">Update Division</button>
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