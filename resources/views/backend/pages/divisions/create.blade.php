@extends('backend.layouts.master')
@section('content')      
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-header">
            Add Division
          </div>
          <div class="card-body">
            <form action="{{ route('backend.division.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              @include('backend.partials.messages')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Division Name">
              </div>

              <div class="form-group">
                <label for="priority">priority</label>
                <input type="text" class="form-control" name="priority" id="priority" aria-describedby="emailHelp" placeholder="Enter Division priority">
              </div>

              <button type="submit" class="btn btn-primary">Add Division</button>
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
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021 <a href="http://www.bootstrapdash.com/" target="_blank">Tiger</a>. All rights reserved.</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection