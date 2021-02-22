@extends('layouts.dashboard_master')
@section('title')
  | Result Edit
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
          <li class="breadcrumb-item active">Edit Result</li>
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
            <h5 class="text-info">Edit Result</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('result/update') }}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $edit_result->id }}">
              <div class="form-group">
                <label for="subject" class="form-label">{{ $edit_result->subject->subject_name }}</label>
                <input type="text" name="marks" class="form-control" value="{{ $edit_result->marks }}" id="subject">
              </div>
              <button type="submit" class="btn btn-outline-info">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>


@endsection
