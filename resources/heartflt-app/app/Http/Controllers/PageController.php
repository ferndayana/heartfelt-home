<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('landingpage');
    }

    public function about() {
        return view('aboutus');
    }

    public function contact() {
        return view('contact');
    }

    public function allbreeds() {
        return view('allbreeds');
    }

    public function blog() {
        return view('blog');
    }
}
