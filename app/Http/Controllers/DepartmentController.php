<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Carbon\Carbon;

class DepartmentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /*
    * Show the Department page
    */
    public function index(){
      return view('admin.department.index',[
        'departments' => Department::all(),
      ]);
    }

    /*
    * Show the Department create page
    */
    public function create(){
      return view('admin.department.add');
    }

    /*
    * Store Data in Database
    */
    public function store(Request $request){
      $request->validate([
        'department_name' => 'required|unique:departments,department_name',
        'department_code' => 'required|numeric|unique:departments,department_code'
      ]);

      Department::insert([
        'department_name' => $request->department_name,
        'department_code' => $request->department_code,
        'created_at' => Carbon::now(),
      ]);
      return redirect('department')->with('message','Department Added Successfullu..');
    }

    /*
    * show the specfique data
    */
    public function edit($id){
      return view('admin.department.edit',[
        'department' => Department::find($id),
      ]);
    }

    /*
    * Update the specfique data
    */
    public function update(Request $request){
      $request->validate([
        'department_name' => 'required',
        'department_code' => 'required'
      ]);

      Department::find($request->id)->update([
        'department_name' => $request->department_name,
        'department_code' => $request->department_code,
        'updated_at' => Carbon::now()
      ]);

      return redirect('department')->with('message','Data Updated Successfully..');
    }

    /*
    * Delete the specfique data
    */

    public function delete($id){
      Department::find($id)->delete();
      return back()->with('message','Data Deleted Successfully..');
    }

}
