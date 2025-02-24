<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function project($id)
    {
        return view('project', ['id' => $id]);
    }

    public function profile($username)
    {
        return view('profile', ['username' => $username]);
    }
}
