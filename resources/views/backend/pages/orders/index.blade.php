@extends('backend.layouts.master')
@section('content')      
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-header">
            Manage Orders
          </div>
        <div class="card-body">
          @include('backend.partials.messages')
        <table class="table table-hover table-striped" id="dataTable">
          <thead>
            <tr>
              <th>#</th>
              <th>Order ID</th>
              <th>Orderer Name</th>
              <th>Orderer Phone No</th>
              <th>Order Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($orders as $order)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>#OE{{ $order->id }}</td>
              <td>{{ $order->name }}</td>
              <td>{{ $order->phone_no }}</td>
              <td>
                <p>
                  @if ($order->is_seen_by_admin)
                  <button type="button" class="btn btn-success btn-sm">Seen</button>
                  @else
                  <button type="button" class="btn btn-warning btn-sm">Unseen</button>
                  @endif
                </p>

                <p>
                  @if ($order->is_completed)
                  <button type="button" class="btn btn-success btn-sm">Completed</button>
                  @else
                  <button type="button" class="btn btn-warning btn-sm">Not Completed</button>
                  @endif
                </p>

                <p>
                  @if ($order->is_paid)
                  <button type="button" class="btn btn-success btn-sm">Paid</button>
                  @else
                  <button type="button" class="btn btn-danger btn-sm">Unpaid</button>
                  @endif
                </p>
              </td>
              <td>
                

                <a href="{{ route('backend.order.show', $order->id) }}"  class="btn btn-info">View Order</a>

                <a href="#deleteModal{{ $order->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{!! route('backend.order.delete',$order->id) !!}" method="post">
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

          </tbody>

            
            <tfoot>
              <tr>

              </tr>
            </tfoot>
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
