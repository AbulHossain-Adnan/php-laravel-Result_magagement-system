@extends('layouts.dashboard_master')
@section('title')
  | subject
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
          <li class="breadcrumb-item active">Subject</li>
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
          <a href="{{ url('subject/add') }}" class="btn btn-success">Add Subject</a>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Subject List</h3>
          </div>
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL.NO</th>
              <th>Subject Name</th>
              <th>Subject Code</th>
              <th>Cradit</th>
              <th>Semester</th>
              <th>Department</th>
              <th>Created</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @forelse ($subjects as $subject)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $subject->subject_name }}</td>
                  <td>{{ $subject->subject_code }}</td>
                  <td>{{ $subject->cradit }}</td>
                  <td>{{ $subject->semester->name }}</td>
                  <td>{{ $subject->department->department_name }}</td>
                  <td>{{ $subject->created_at->diffForHumans() }}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ url('subject/edit/'.$subject->id) }}" class="btn btn-success">Edit</a>
                      <a href="{{ url('subject/delete/'.$subject->id) }}" class="btn btn-danger">Delete</a>
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
