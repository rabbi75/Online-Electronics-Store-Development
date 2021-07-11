@extends('backend.layouts.master')
@section('content')      
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-header">
            Manage Category
          </div>
        <div class="card-body">
          @include('backend.partials.messages')
          <table class="table" table-hover table-striped>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Category Image</th>
              <th>Parent Id</th>
              <th>Actin</th>
            </tr>
            @php $i=1; @endphp
            @foreach ($categories as $category)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $category->name }}</td>
                <td>
                  <img src="{!! asset('images/categories/'. $category->image) !!}" width="100" height="150">
                </td>
                <td>
                  @if ($category->parent_id == NULL)
                    Primary Category
                  @else
                    {{ $category->parent->name }}
                  @endif
                </td>
                <td>
                  <a href="{{ route('backend.category.edit', $category->id) }}" class="btn btn-success">Edit</a>
                  <a href="#deleteModal{{ $category->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{!! route('backend.category.delete',$category->id) !!}" method="post">
                              {{ csrf_field() }}
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </td>
              </tr>
            @endforeach
          </table>

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