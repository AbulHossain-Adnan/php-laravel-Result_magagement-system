@extends('layouts.dashboard_master')
@section('title')
  Profile
@endsection
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          {{-- <li class="breadcrumb-item"><a href="#">Da</a></li> --}}
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

      <div class="col-md-6 m-auto">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{ asset('uploads/users/'.Auth::user()->picture) }}"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

            <p class="text-muted text-center">Admin</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Email Address</b> <a class="float-right">{{ Auth::user()->email }}</a>
              </li>
              <li class="list-group-item">

                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Change Password</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body mb-4 mt-4">
                    <form action="{{ url('change/password') }}" method="post" class="resultFind">
                      @csrf
                      <div class="form-group">
                        <label for="roll" class="form-label">Old Password</label>
                        <input type="password" name="old_password" placeholder="Enter Old Password" required class="form-control" id="roll">
                        @if (session('passwordError'))
                          <span class="text-danger">{{ session('passwordError') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="new" class="form-label">New Password</label>
                        <input type="password" name="password" placeholder="Enter New Password" class="form-control" id="new">
                        @error ('password')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @if (session('samePassword'))
                          <span class="text-danger">{{ session('samePassword') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="Confirm" class="form-label">Old Password</label>
                        <input type="password" name="password_confirmation" placeholder="Enter Confirm Password" class="form-control" id="Confirm">
                        @error ('password_confirmation')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>


                      <button type="submit" class="btn btn-outline-warning">Change</button>
                    </form>
                  </div>
                  <!-- /.card-body -->
                  {{-- <div class="card-footer text-center">
                    <a href="javascript::">View All Users</a>
                  </div> --}}
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->

              </li>

            </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>




    </div>
  </div><!-- /.container-fluid -->
</section>

@endsection
