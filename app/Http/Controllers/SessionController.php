<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use Carbon\Carbon;

class SessionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /*
    * Show the session list
    */
    public function index(){
      return view('admin.session.index',[
        'sessions' => Session::all(),
      ]);
    }

    /*
    * Store the session into storage
    */
    public function store(Request $request){
      Session::insert([
        'session' => $request->session,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message','Session Added Successfully..');
    }

    /*
    * Update the Specifiq data
    */
    public function sessionUpdate(Request $request){
      Session::find($request->id)->update([
        'session' => $request->session,
        'updated_at' => Carbon::now()
      ]);
      return back()->with('message','Session Updated Successfully..');
    }

    /*
    * delete the Specifiq data
    */
    public function delete($id){
      Session::find($id)->delete();
      return back()->with('message','Session Delete Successfully..');
    }
}
