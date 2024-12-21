<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->take(5)->get(); // Get the latest 5 posts
        return view('home', compact('posts'));

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

    public function signup()
    {
        return view('auth.signup');
    }


}
