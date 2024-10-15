<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('home');
    }

    // Metode untuk halaman About
    public function about()
    {
        return view('about');
    }

    // Metode untuk halaman Contact
    public function contact()
    {
        return view('contact');
    }

    // Metode untuk halaman Profil
    public function profil()
    {
        return view('profil');
    }
}
