@extends('layouts.dashboard_master')
@section('title')
  Semester
@endsection
@section('semester')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Semester</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ url('semester') }}">Semester List</a></li>
          <li class="breadcrumb-item active">Add Semester</li>
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
            <h5 class="text-info">Add a new Semester</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('semester/add/post') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="name" class="form-label">Semester Name</label>
                <input type="text" id="name" name="name" class="form-control">
                @error ('name')
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
