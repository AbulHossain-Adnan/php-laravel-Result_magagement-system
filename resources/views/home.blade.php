@extends('layouts.dashboard_master')
@section('title')
  Dashboard
@endsection
@section('dashboard')
  active
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          {{-- <li class="breadcrumb-item"><a href="#">Da</a></li> --}}
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fab fa-codepen"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Department</span>
            <span class="info-box-number">
              {{ $department }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hourglass-start"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Session</span>
            <span class="info-box-number">
              {{ $session }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Subjects</span>
            <span class="info-box-number">
              {{ $subject }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Students</span>
            <span class="info-box-number">
              {{ $student_total }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>


      <div class="col-12">
        <div class="mt-5">
          <div class="row">
            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">New Admited Studets</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="users-list clearfix">
                    @foreach ($students as $student)
                      <li>
                        <img src="{{ asset('uploads/students') }}/{{ $student->picture }}" height="100" alt="User Image">
                        <a class="users-list-name" href="{{ url('student/view/'.$student->id) }}">{{ $student->name }}</a>
                        <span class="users-list-date">{{ $student->created_at->diffForHumans() }}</span>
                      </li>
                    @endforeach

                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="{{ url('student') }}">View All Users</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>

            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Search Result</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body mb-4 mt-4">
                  <form action="{{ url('result/searching') }}" method="post" class="resultFind">
                    @csrf
                    <div class="form-group">
                      <label for="roll" class="form-label">Roll No</label>
                      <input type="text" name="roll" placeholder="Enter Roll" required class="form-control" id="roll">
                    </div>

                    <div class="form-group">
                      <label for="semester" class="form-label">Semester</label>
                      <select class="form-control" name="semester_id" required id="semester">
                        <option value="">--Select--</option>
                        @foreach ($semesters as $semester)
                          <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <button type="submit" class="btn btn-outline-info">Search</button>
                  </form>
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer text-center">
                  <a href="javascript::">View All Users</a>
                </div> --}}
                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>

          </div>
        </div>
      </div>



    </div>
  </div><!-- /.container-fluid -->
</section>

@endsection
