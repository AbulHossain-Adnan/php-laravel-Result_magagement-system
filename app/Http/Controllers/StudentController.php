<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Session;
use App\Student;
use App\Semester;
use Carbon\Carbon;
use Image;

class StudentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
      return view('admin.student.index',[
        'students' => Student::with('department')->get()
      ]);
    }

    public function create(){
      return view('admin.student.add_student',[
        'departments' => Department::all(),
        'sessions' => Session::all(),
      ]);
    }

    public function store(Request $request){
      $request->validate([
        'name' => 'required',
        'roll' => 'required|unique:students,roll',
        'registration' => 'required|unique:students,registration',
        'department_id' => 'required',
        'session_id' => 'required',
        'email' => 'required|unique:students,email',
        'phone' => 'required',
        'fathers_name' => 'required',
        'mothers_name' => 'required',
        'address' => 'required',
        'picture' => 'required|mimes:jpg,jpeg,png',
      ]);

      $student_id = Student::insertGetId([
        'name' => $request->name,
        'roll' => $request->roll,
        'registration' => $request->registration,
        'department_id' => $request->department_id,
        'session_id' => $request->session_id,
        'email' => $request->email,
        'phone' => $request->phone,
        'fathers_name' => $request->fathers_name,
        'mothers_name' => $request->mothers_name,
        'address' => $request->address,
        'created_at' => Carbon::now()
      ]);

      //Image Insert
      $picture = $request->file('picture');
      $new_name = $student_id.".".$picture->getClientOriginalExtension();
      $upload_location = base_path("public/uploads/students/".$new_name);
      Image::make($picture)->resize(450,570)->save($upload_location);

      //Image insert In Database
      Student::find($student_id)->update([
        'picture' => $new_name
      ]);

      return redirect('student')->with('message',"Student Added Successfully..");

    }

    public function viewStudent($id){
      return view('admin.student.view_student',[
        'student_info' => Student::with('department','session')->find($id),
        'semesters' => Semester::all()
      ]);
    }

    public function edit($id){
      return view('admin.student.edit_student',[
        'student' => Student::find($id),
        'departments' => Department::all(),
        'sessions' => Session::all(),
      ]);
    }

    public function studentUpdate(Request $request){
      $request->validate([
        'name' => 'required',
        'roll' => 'required',
        'registration' => 'required',
        'department_id' => 'required',
        'session_id' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'fathers_name' => 'required',
        'mothers_name' => 'required',
        'address' => 'required',
        'picture' => 'mimes:jpg,jpeg,png',
      ]);

      if ($request->hasFile('new_picture')) {
        $delete_location = base_path('public/uploads/students/'.Student::find($request->id)->picture);
        unlink($delete_location);

        //Image Updated
        $picture = $request->file('new_picture');
        $new_name = $request->id.".".$picture->getClientOriginalExtension();
        $upload_location = base_path("public/uploads/students/".$new_name);
        Image::make($picture)->resize(450,570)->save($upload_location);

        //Image updated In Database
        Student::find($request->id)->update([
          'picture' => $new_name
        ]);
      }

      Student::find($request->id)->update([
        'name' => $request->name,
        'roll' => $request->roll,
        'registration' => $request->registration,
        'department_id' => $request->department_id,
        'session_id' => $request->session_id,
        'email' => $request->email,
        'phone' => $request->phone,
        'fathers_name' => $request->fathers_name,
        'mothers_name' => $request->mothers_name,
        'address' => $request->address,
        'updated_at' => Carbon::now()
      ]);

      return redirect('student')->with('message','Student Information Updated');
    }


    public function studentDelete($id){
      $delete_location = base_path('public/uploads/students/'.Student::find($id)->picture);
      unlink($delete_location);
      Student::find($id)->delete();
      return redirect('student')->with('message','Student Deleted Successfully');
    }


}
