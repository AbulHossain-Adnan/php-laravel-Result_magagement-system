@extends('layouts.frontend_master')
@section('title')
  Result Search
@endsection
@section('content')

  <div class="container">
    <div class="row mt-5">
      <div class="col-7 m-auto mt-5">
        <div class="card mt-5">
          <div class="card-header bg-success">
            <h5 class="text-center">Search Result</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 m-auto">
                @if (session('message'))
                  <div class="alert alert-info">{{ session('message') }}</div>
                @endif
                <form action="{{ url('publish/result') }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="roll" class="form-label">Roll No</label>
                    <input type="text" name="roll" class="form-control" placeholder="Enter Your Roll" id="roll">
                    @error ('roll')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-control" name="semester_id">
                      <option value="">-- Select a semester --</option>
                      @foreach ($semesters as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                      @endforeach
                    </select>
                    @error ('semester_id')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-outline-info mt-3">Submit</button>
                </form>
              </div>
            </div>
          </div>
          <div class="card-footer bg-secendory text-center text-success">
            Copyright &copy; Result Management System <span>{{ Carbon\Carbon::now()->format('Y') }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
