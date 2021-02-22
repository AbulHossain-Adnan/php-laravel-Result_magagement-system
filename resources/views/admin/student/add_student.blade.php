@extends('layouts.dashboard_master')
@section('title')
  | Student
@endsection
@section('student')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Student</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ url('student') }}">Student List</a></li>
          <li class="breadcrumb-item active">Add Student Information</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-8 m-auto">
        <div class="card">
          <div class="card-header">
            <h5 class="text-info">Add Student Information</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('student/add/post') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="roll" class="form-label">Roll No</label>
                <input type="text" name="roll" class="form-control" id="roll">
                @error('roll')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="reg" class="form-label">Registration No</label>
                <input type="text" name="registration" class="form-control" id="reg">
                @error('registration')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="dep" class="form-label">Department</label>
                <select class="form-control" name="department_id" id="dep">
                  <option value="">--Select--</option>
                  @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                  @endforeach
                </select>
                @error('department_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="session" class="form-label">Session</label>
                <select class="form-control" name="session_id" id="session">
                  <option value="">--Select--</option>
                  @foreach ($sessions as $session)
                    <option value="{{ $session->id }}">{{ $session->session }}</option>
                  @endforeach
                </select>
                @error('session_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email">
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone">
                @error('phone')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="fathers_name" class="form-label">Father's Name</label>
                <input type="text" name="fathers_name" class="form-control" id="fathers_name">
                @error('fathers_name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="mothers_name" class="form-label">Mother's Name</label>
                <input type="text" name="mothers_name" class="form-control" id="mothers_name">
                @error('mothers_name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" name="picture" class="form-control" id="picture">
                @error('picture')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" rows="3" class="form-control" id="address"></textarea>
                @error('address')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <input type="submit"  value="Add Student Information" class="btn btn-outline-success form-control">
            </form>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>

@endsection
