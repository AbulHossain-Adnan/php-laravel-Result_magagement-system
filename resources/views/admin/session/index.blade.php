@extends('layouts.dashboard_master')
@section('title')
  | Session
@endsection
@section('session')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Session</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Session</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="float-right mt-2 mb-4 mr-4">
          {{-- <a href="{{ url('session/add') }}" class="btn btn-success">Add Session</a> --}}
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
            Add Session
          </button>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Session List</h3>
          </div>
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL.NO</th>
              <th>Session</th>
              <th>Created</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @forelse ($sessions as $session)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $session->session }}</td>
                  <td>{{ $session->created_at->diffForHumans() }}</td>
                  <td>
                    <div class="btn-group">
                      <a data-id="{{ $session->id }}" id="edit" class="btn btn-success text-white">Edit</a>
                      <a href="{{ url('session/delete/'.$session->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="50" class="text-center text-danger">Data Not Available</td>
                </tr>
              @endforelse

            </tbody>
          </table>
        </div>
       </div>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>

<!-- /.modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Session</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('session/add/post') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name" class="form-label">Session</label>
            <input type="text" name="session" id="name" required class="form-control">
          </div>
          <button type="submit" class="btn btn-outline-success">Add</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- /.Edit modal -->
<div class="modal fade" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Session</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('session/update') }}" method="post">
          @csrf
          <input type="hidden" name="id" id="editid">
          <div class="form-group">
            <label for="session" class="form-label">Session</label>
            <input type="text" name="session" id="editsession" required class="form-control">
          </div>
          <button type="submit" class="btn btn-outline-success">Update</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection
