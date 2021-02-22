<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Result;
use App\Student;
use App\Department;
use App\Session;
use App\Subject;
use PDF;

class FrontendController extends Controller
{
    public function index(){
      return view('index',[
        'semesters' => Semester::all()
      ]);
    }

    public function resultPublishGet(){
      return back();
    }

    public function resultPublish(Request $request){
      $request->validate([
        'roll' => 'required',
        'semester_id' => 'required'
      ]);

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

        return view('result',[
          'student_info' => Student::with('department','session')->where('roll',$request->roll)->first(),
          'semester' => Semester::find($request->semester_id),
          'results' => $results,
          'gpa' => $gpa,
        ]);
      }
      else {
        return back()->with('message','Sorry This Result Has Not Published');
      }
    }

}
