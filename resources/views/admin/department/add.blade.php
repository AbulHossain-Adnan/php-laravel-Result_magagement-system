@extends('layouts.dashboard_master')
@section('title')
  | Department
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
          <li class="breadcrumb-item"><a href="{{ url('department') }}">Department List</a></li>
          <li class="breadcrumb-item active">Add Department</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 m-auto">
        <div class="card">
          <div class="card-header">
            <h5 class="text-info">Add a new department</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('department/add/post') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="name" class="form-label">Department Name</label>
                <input type="text" id="name" name="department_name" class="form-control">
                @error ('department_name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="code" class="form-label">Department Code</label>
                <input type="text" id="code" name="department_code" class="form-control">
                @error ('department_code')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-outline-success">Add To Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>

@endsection
