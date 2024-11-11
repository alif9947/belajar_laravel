<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        'password' => Hash::make($request->password)
    ]);

    return redirect()->back()->with('success', 'Berhasil');

    // dd($request);
}

public function signin()
{
    return view('auth.signin');
}

public function storeSignin(Request $request){
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    // Coba autentikasi pengguna
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->route('home')->with('success', 'Berhasil login');
    }

    // Jika login gagal
    return redirect()->back()->withErrors([
        'name' => 'Login gagal'
    ])->withInput() ;
}

public function showUsers()
    {
        $users = User::all();
        return view('users.users', compact('users'));
    }

    // Menampilkan detail pengguna berdasarkan ID
    public function showUser($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Menampilkan halaman edit user
public function editUser($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('users')->with('error', 'User tidak ditemukan');
    }

    return view('users.edit', compact('user'));
}

// Mengupdate data user
public function updateUser(Request $request, $id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('users')->with('error', 'User tidak ditemukan');
    }

    // Validasi input
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users,email,' . $user->id,
        'password' => 'nullable|min:6'
    ]);

    // Update data user
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->password) {
        $user->password = Hash::make($request->password);
    }
    $user->save();

    return redirect()->route('users')->with('success', 'Data pengguna berhasil diperbarui');
}

// Menghapus data user
public function deleteUser($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('users')->with('error', 'User tidak ditemukan');
    }

    $user->delete();

    return redirect()->route('users')->with('success', 'User berhasil dihapus');
}

// Menangani pencarian pengguna
public function searchUsers(Request $request)
{
    $query = $request->input('search');

    // Mengambil data pengguna yang sesuai dengan query pencarian
    $users = User::when($query, function ($queryBuilder) use ($query) {
        return $queryBuilder->where('name', 'like', "%{$query}%")
                            ->orWhere('email', 'like', "%{$query}%");
    })->get();

    // Kirim data pengguna ke view
    return view('users.users', compact('users'));
}


}
