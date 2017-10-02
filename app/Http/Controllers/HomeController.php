<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    

     public function welcome()
    {
        return view('welcome');
    }

     public function about()
    {
        return view('about');
    }

     public function subject()
    {
        return view('subject');
    }
    public function social()
    {
        return view('social');
    }

     public function education()
    {
        return view('education');
    }

     public function aboutphp()
    {
        return view('aboutphp');
    }
}
