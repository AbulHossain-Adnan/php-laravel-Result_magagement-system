<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Student;
use App\Department;
use App\Session;
use App\Subject;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
          'semesters' => Semester::all(),
          'students' => Student::latest()->limit(8)->get(),
          'department' => Student::all()->count(),
          'session' => Session::all()->count(),
          'subject' => Subject::all()->count(),
          'student_total' => Student::all()->count(),
        ]);
    }
}
