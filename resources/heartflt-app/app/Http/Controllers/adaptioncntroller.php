// app/Http/Controllers/AdoptionController.php
<?php
// app/Http/Controllers/AdoptionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function showHomePage()
    {
        return view('landingpage'); // Assuming you have a home.blade.php
    }

    public function showAboutPage()
    {
        return view('abous'); // Assuming you have an about.blade.php
    }

    public function showContactPage()
    {
        return view('contact'); // Assuming you have a contact.blade.php
    }

    public function showAdoptPage()
    {
        return view('allbreeds'); // Assuming you have an adopt.blade.php
    }

    
}
