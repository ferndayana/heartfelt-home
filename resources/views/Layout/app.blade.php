<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HeartFlt App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Optional --}}
</head>
<body>
    <nav style="background: #f2f2f2; padding: 10px;">
        <a href="{{ url('/welcome') }}">Home</a> |
        <a href="{{ url('/about') }}">About Us</a> |
        <a href="{{ url('/contact') }}">Contact</a> |
        <a href="{{ url('/blog') }}">Blog</a> |
        <a href="{{ url('/adoptionform') }}">Adoption</a>
    </nav>

    <div style="padding: 20px;">
        @yield('content')
    </div>
</body>
</html>
