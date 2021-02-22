<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index(){
      return view('profile');
    }

    public function passwordUpdate(Request $request){
      $request->validate([
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
      ]);

      if($request->old_password == $request->password) {
        return back()->with('samePassword','Your Old Password Can Not Be Your New Password.');
      }
      if (Hash::check($request->old_password,Auth::user()->password)) {
        User::find(Auth::id())->update([
          'password' => Hash::make($request->password),
        ]);
        return back()->with('message','Password Changed Successfully');
      }
      else {
        return back()->with('passwordError','Old Password Does Not Mathch.');
      }

    }
}
