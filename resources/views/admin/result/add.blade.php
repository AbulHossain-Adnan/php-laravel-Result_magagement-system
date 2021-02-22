@extends('layouts.dashboard_master')
@section('title')
  | Result
@endsection
@section('result')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Result</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ url('result') }}">Result List</a></li>
          <li class="breadcrumb-item active">Add Result</li>
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
            <h5 class="text-info">Add Result</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('result/add/post') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="roll" class="form-label">Roll No</label>
                <input type="text" name="roll" class="form-control" id="roll">
              </div>

              <div class="form-group">
                <label for="semester" class="form-label">Semester</label>
                <select class="form-control" name="semester_id" id="semester">
                  <option value="">--Select--</option>
                  @foreach ($semesters as $semester)
                    <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                  @endforeach
                </select>
              </div>
              <img src="{{ asset('dashboard_assets') }}/img/loder.gif" alt="loder" id="loder" height="60">
              <div id="subject">
                <span class="text-danger mb-2" id="student_reg"></span>
              </div>
              <div id="submit">

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>


@endsection
