<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use Carbon\Carbon;

class SemesterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /*
    * Show the all Semester
    */
    public function index(){
      return view('admin.semester.index',[
        'semesters' => Semester::all(),
      ]);
    }

    /*
    * show the semester Create page
    */
    public function create(){
      return view('admin.semester.add');
    }

    /*
    * Store the value in database
    */
    public function store(Request $request){
      $request->validate([
        'name' => 'required|unique:semesters,name'
      ]);
      Semester::insert([
        'name' => $request->name,
        'created_at' => Carbon::now()
      ]);
      return redirect('semester')->with('message','Semester Added Successfully...');
    }

    public function edit($id){
      return view('admin.semester.edit',[
        'semester' => Semester::find($id)
      ]);
    }

    public function update(Request $request){
      $request->validate([
        'name' => 'required'
      ]);
      Semester::find($request->id)->update([
        'name' => $request->name,
        'updated_at' => Carbon::now()
      ]);
      return redirect('semester')->with('message','Semester Updated Successfully..');
    }

    public function delete($id){
      Semester::find($id)->delete();
      return redirect('semester')->with('message','Semester Deleted Successfully..');
    }

}
