<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Semester;
use App\Result;
use App\Student;
use App\Subject;
use Carbon\Carbon;

class ResultController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function index(){
    return view('admin.result.index',[
      'results' => Result::with('semester','subject')->get()
    ]);
  }

  public function create(){
    return view('admin.result.add',[
      'semesters' => Semester::all(),
    ]);
  }

  public function findSubject($roll,$semester){
    if (Student::where('roll',$roll)->exists()) {
      if (Result::where('roll',$roll)->where('semester_id',$semester)->exists()) {
        return response()->json([
          'error' => "This Result On This Semester Alll Ready Taken"
        ]);
      }
      else {
        $department_id = Student::where('roll',$roll)->first()->department_id;
        $subject = Subject::where('semester_id',$semester)->where('department_id',$department_id)->get();
        return response()->json([
          'data' => $subject
        ]);
      }

    }
    else {
      return response()->json([
        'error' => "This Student Is Not Register"
      ]);
    }

  }

  public function store(Request $request){
    foreach ($request->subject as $subject_id => $mark) {
      Result::insert([
        'roll' => $request->roll,
        'semester_id' => $request->semester_id,
        'subject_id' => $subject_id,
        'marks' => $mark,
        'point' => $this->gradePointCalculate($mark),
        'created_at' => Carbon::now()
      ]);
    }
    return redirect('result')->with('message',"Result Added Successfully");
  }

  /*
  * Calculating The Grate Point Every Subject
  */
  public function gradePointCalculate($mark){
    if ($mark >= 80) {
      return 4.00;
    }
    elseif ($mark < 80 && $mark >= 75) {
      return 3.75;
    }
    elseif ($mark < 75 && $mark >= 70) {
      return 3.50;
    }
    elseif ($mark < 70 && $mark >= 65) {
      return 3.25;
    }
    elseif ($mark < 65 && $mark >= 60) {
      return 3.00;
    }
    elseif ($mark < 60 && $mark >= 55) {
      return 2.75;
    }
    elseif ($mark < 55 && $mark >= 50) {
      return 2.50;
    }
    elseif ($mark < 50 && $mark >= 45) {
      return 2.25;
    }
    elseif ($mark < 45 && $mark >= 40) {
      return 2.00;
    }
    else {
      return 0.00;
    }
  }

  public function resultFind(){
    return view('admin.result.result_search',[
      'semesters' => Semester::all(),
    ]);
  }


  public function search(Request $request){
    if (Result::where('roll',$request->roll)->where('semester_id',$request->semester_id)->exists()) {
      //GPA Calculation
      $cradit = 0;
      $total_subject_grade = 0;
      $results = Result::with('subject')->where('roll',$request->roll)->where('semester_id',$request->semester_id)->get();
      foreach ($results as $result) {
        if ($result->point == 0) {
          $total_subject_grade = 0;
          break;
        }
        else {
          $cradit = $cradit + $result->subject->cradit;
          $total_subject_grade = $total_subject_grade + ($result->point*$result->subject->cradit);
        }
      }
      $gpa = $total_subject_grade / $cradit;

      return view('admin.result.result_publish',[
        'student_info' => Student::with('department','session')->where('roll',$request->roll)->first(),
        'semester' => Semester::find($request->semester_id)->name,
        'results' => $results,
        'gpa' => $gpa,
      ]);
    }
    else {
      return redirect('result/find')->with([
        'type' => 'error',
        'message' => "Result Not Published"
      ]);
    }
  }

  public function edit($id){
    return view('admin.result.result_edit',[
      'edit_result' => Result::find($id),
    ]);
  }

  public function update(Request $request){
    Result::find($request->id)->update([
      'marks' => $request->marks,
      'point' => $this->gradePointCalculate($request->marks),
      'updated_at' => Carbon::now()
    ]);
    return redirect('result')->with('message','Result Updated');
  }

}
