@extends('layouts.dashboard_master')
@section('title')
  | Subject
@endsection
@section('subject')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Subject</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ url('subject') }}">Subject List</a></li>
          <li class="breadcrumb-item active">Add Subject</li>
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
            <h5 class="text-info">Add a new Subject</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('subject/add/post') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="subject_name" class="form-label">Subject Name</label>
                <input type="text" id="subject_name" name="subject_name" class="form-control">
                @error ('subject_name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="code" class="form-label">Subject Code</label>
                <input type="text" id="code" name="subject_code" class="form-control">
                @error ('subject_code')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="cradit" class="form-label">Cradit</label>
                <input type="text" id="cradit" name="cradit" class="form-control">
                @error ('cradit')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="" class="form-label">Semester</label>
                <select class="form-control" name="semester_id">
                  <option value="">--Select--</option>
                  @foreach ($semesters as $semester)
                    <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                  @endforeach
                </select>
                @error ('semester_id')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="" class="form-label">Department</label>
                <select class="form-control" name="department_id">
                  <option value="">--Select--</option>
                  @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                  @endforeach
                </select>
                @error ('department_id')
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
