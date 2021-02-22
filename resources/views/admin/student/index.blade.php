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
          <li class="breadcrumb-item active">Student</li>
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
          <a href="{{ url('student/add') }}" class="btn btn-success">Add Student</a>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Student List</h3>
          </div>
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL.NO</th>
              <th>Name</th>
              <th>Picture</th>
              <th>Roll No</th>
              <th>Department</th>
              <th>Phone</th>
              <th>Father's Name</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @forelse ($students as $student)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $student->name }}</td>
                  <td>
                    <img src="{{ asset('uploads/students/'.$student->picture) }}" alt="picture" height="80" width="80" style="border-radius: 50px;">
                  </td>
                  <td>{{ $student->roll }}</td>
                  <td>{{ $student->department->department_name }}</td>
                  <td>{{ $student->phone }}</td>
                  <td>{{ $student->fathers_name }}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ url('student/view/'.$student->id) }}" class="btn btn-info">View</a>
                      <a href="{{ url('student/edit/'.$student->id) }}" class="btn btn-success">Edit</a>
                      <a href="{{ url('student/delete/'.$student->id) }}" class="btn btn-danger">Delete</a>
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
