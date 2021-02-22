@extends('layouts.dashboard_master')
@section('title')
  Department
@endsection
@section('department')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Department</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Department</li>
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
          <a href="{{ url('department/add') }}" class="btn btn-success">Add Department</a>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Department List</h3>
          </div>
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL.NO</th>
              <th>Department Name</th>
              <th>Department Code</th>
              <th>Created</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @forelse ($departments as $department)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $department->department_name }}</td>
                  <td>{{ $department->department_code }}</td>
                  <td>{{ $department->created_at->diffForHumans() }}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ url('department/edit/'.$department->id) }}" class="btn btn-success">Edit</a>
                      <a href="{{ url('department/delete/'.$department->id) }}" class="btn btn-danger">Delete</a>
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

@endsection
