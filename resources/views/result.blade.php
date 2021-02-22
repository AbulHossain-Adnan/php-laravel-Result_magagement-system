@extends('layouts.frontend_master')
@section('title')
    publish Result
@endsection
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-8 m-auto">
          <div class="card mt-3">
            <div class="card-body">
                <!-- invoice content -->
                <div class="invoice p-3 mb-3">
                  <!-- title row -->
                  <div class="row">
                    <div class="col-12">
                      <h4>
                        <i class="fas fa-globe"></i>  Brahmanbaria Polytechnnic
                        <small class="float-right">{{ Carbon\Carbon::now()->format('d / m / Y') }}</small>
                      </h4>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- info row -->
                  <div class="row invoice-info">
                    <div class="col-sm-4 mt-5 invoice-col">

                      <address>
                        <strong>Name : {{ $student_info->name }}</strong><br>
                        <b>Father's Name</b> : {{ $student_info->fathers_name }}<br>
                        <b>Mother's Name</b> : {{ $student_info->mothers_name }}<br>
                        {{-- Birth: 13/12/1999<br> --}}
                        <b>Phone</b>: {{ $student_info->phone }}<br>
                        <b>Email</b>: {{ $student_info->email }}
                      </address>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 invoice-col">
                      <img src="{{ asset('uploads/students') }}/{{ $student_info->picture }}" alt="Student Picture" height="150" width="140">
                      <br>
                      <br>
                      <b>Roll No:</b> {{ $student_info->roll }}<br>
                      <b>Registration No:</b> {{ $student_info->registration }}<br>
                      <b>Session:</b> {{ $student_info->session->session }}</br>
                      <b>Department:</b> {{ $student_info->department->department_name }}</br>
                      <b>Semester: {{ $semester->name }}</b>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <!-- Table row -->
                  <div class="row">
                    <div class="col-12 table-responsive mt-5">
                      <table class="table table-bordered">
                        <thead>
                        <tr>
                          <th>Subject Name</th>
                          <th>Subject Cradit</th>
                          <th>Grade</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($results as $result)
                            <tr>
                              <td>{{ $result->subject->subject_name }}</td>
                              <td>{{ $result->subject->cradit }}</td>
                              <td>
                                @switch($result->point)
                                  @case(4.00)
                                    A+
                                    @break
                                  @case(3.75)
                                    A
                                    @break
                                  @case(3.50)
                                    A-
                                    @break
                                  @case(3.25)
                                    B+
                                    @break
                                  @case(3.00)
                                    B
                                    @break
                                  @case(2.75)
                                    B-
                                    @break
                                  @case(2.50)
                                    C+
                                    @break
                                  @case(2.25)
                                    C
                                    @break
                                  @case(2.00)
                                    D
                                    @break
                                  @default
                                    F
                                    @break
                                @endswitch
                              </td>
                            </tr>
                          @endforeach

                        </tbody>
                        <tr>
                          <td colspan="4" class="text-center">
                            <span class="text-success">GPA : </span><b>{{ $gpa == 0 ? "Fail":number_format($gpa,2) }}</b>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-12">
                      <a onclick="print();" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

                    </div>
                  </div>
                </div>
                <!-- /.invoice -->

            </div>
          </div>
        </div>


      </div>

    </div><!-- /.container-fluid -->
  </section>

@endsection
