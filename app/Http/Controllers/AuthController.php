<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function signup(){

      return view('auth.signup');
  }

  public function storeSignup(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required'
    ]);

    dd($request);
}


}
