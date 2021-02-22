<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Semester;
use App\Department;
use Carbon\Carbon;

class SubjectController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
      return view('admin.subject.index',[
        'subjects' => Subject::with('semester','department')->get()
      ]);
    }

    public function create(){
      return view('admin.subject.add',[
        'departments' => Department::all(),
        'semesters' => Semester::all()
      ]);
    }

    public function store(Request $request){
      $request->validate([
        'subject_name' => 'required',
        'subject_code' => 'required|numeric',
        'cradit' => 'required|numeric',
        'semester_id' => 'required',
        'department_id' => 'required'
      ],[
        'semester_id.required' => "Please Select a Semester",
        'department_id.required' => "Please Select a Department",
      ]);

      if (Subject::where('semester_id',$request->semester_id)->where('department_id',$request->department_id)->where('subject_code',$request->subject_code)->exists()) {
        return back()->with([
          'type' => 'error',
          'message' => "This Subject Hasbeen allready taken on this Semester and Department"
        ]);
      }

      Subject::insert([
        'subject_name' => $request->subject_name,
        'subject_code' => $request->subject_code,
        'cradit' => $request->cradit,
        'semester_id' => $request->semester_id,
        'department_id' => $request->department_id,
        'created_at' => Carbon::now()
      ]);
      return redirect('subject')->with('message','Subject Added Successfully');
    }

    public function edit($id){
      return view('admin.subject.edit',[
        'departments' => Department::all(),
        'semesters' => Semester::all(),
        'subject' => Subject::find($id)
      ]);
    }

    public function update(Request $request){
      $request->validate([
        'subject_name' => 'required',
        'subject_code' => 'required|numeric',
        'cradit' => 'required|numeric',
        'semester_id' => 'required',
        'department_id' => 'required'
      ],[
        'semester_id.required' => "Please Select a Semester",
        'department_id.required' => "Please Select a Department",
      ]);

      Subject::find($request->id)->update([
        'subject_name' => $request->subject_name,
        'subject_code' => $request->subject_code,
        'cradit' => $request->cradit,
        'semester_id' => $request->semester_id,
        'department_id' => $request->department_id,
        'updated_at' => Carbon::now()
      ]);
      return redirect('subject')->with('message','Subject Updated Successfully..');
    }

    public function delete($id){
      Subject::find($id)->delete();
      return redirect('subject')->with('message','Subject Deleted Successfully..');
    }

}
