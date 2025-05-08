<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('landingpage');
    }

    public function aboutus() {
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
    public function signin() {
        return view('signin');
    }
    public function donation() {
        return view('donation');
    }
    public function adoptionform() {
        return view('adoptionform');
    }
}
