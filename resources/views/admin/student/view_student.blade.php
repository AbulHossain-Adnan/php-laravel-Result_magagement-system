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
        <h1 class="m-0 text-dark">Student Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ url('student') }}">Student List</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-4">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{ asset('uploads/students/'.$student_info->picture) }}"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{ $student_info->name }}</h3>

            <p class="text-muted text-center">Student</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Roll No</b> <a class="float-right">{{ $student_info->roll }}</a>
              </li>
              <li class="list-group-item">
                <b>Registration No</b> <a class="float-right">{{ $student_info->registration }}</a>
              </li>
              <li class="list-group-item">
                <b>Department</b> <a class="float-right">{{ $student_info->department->department_name }}</a>
              </li>
            </ul>

            <a href="{{ url('student/edit/'.$student_info->id) }}" class="btn btn-primary btn-block"><b>Update</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->



      <div class="col-md-8">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#details" data-toggle="tab">Student Details</a></li>
              <li class="nav-item"><a class="nav-link" href="#result" data-toggle="tab">Result</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="details">
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-danger">
                      Details of {{ $student_info->name }}
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Name :-  {{ $student_info->name }}</h3>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Roll No :-  {{ $student_info->roll }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Registration No :-  {{ $student_info->registration }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Department :-  {{ $student_info->department->department_name }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Session :-  {{ $student_info->session->session }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Email Address :-  {{ $student_info->email }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Phone Number :-  {{ $student_info->phone }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Father's Name :-  {{ $student_info->fathers_name }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Mother's Name :-  {{ $student_info->mothers_name }}</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-null bg-primary"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header">Address :-  {{ $student_info->address }}</h3>
                    </div>
                  </div>
                  <!-- END timeline item -->

                  <!-- /.timeline-label -->
                  <div>
                    <i class="far fa-clock bg-gray"></i>
                  </div>
                </div>

              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="result">
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                  <!-- timeline item -->
                  <div class="card">
                    <div class="card-header">
                      <h5 class="text-info">Search Result</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ url('result/searching') }}" method="post">
                        @csrf
                        <input type="hidden" name="roll" value="{{ $student_info->roll }}">
                        <div class="form-group">
                          <label for="semester" class="form-label">Select Semester</label>
                          <select class="form-control" required name="semester_id">
                            <option value="">-- Select --</option>
                            @foreach ($semesters as $semester)
                              <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-info">Search</button>
                      </form>
                    </div>
                  </div>
                  <!-- END timeline item -->

                </div>

              </div>
              <!-- /.tab-pane -->


            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>

  </div><!-- /.container-fluid -->
</section>

@endsection
