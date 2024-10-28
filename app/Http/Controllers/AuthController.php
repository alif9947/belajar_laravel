<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash as Hsha;

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

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hsha::make($request->password)
    ]);

    return redirect()->back()->with('success', 'Berhasil');

    // dd($request);
}


}
