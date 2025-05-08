<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>

    {{-- ✅ Include the navigation here --}}
    <nav>
        <ul>
            <li><a href="{{ url('/admin') }}">Admin</a></li>
            <li><a href="{{ url('/adoptionform') }}">Adoption Form</a></li>
            <li><a href="{{ url('/allbreeds') }}">All Breeds</a></li>
            <li><a href="{{ url('/allcats') }}">All Cats</a></li>
            <li><a href="{{ url('/application') }}">Application</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/carousel') }}">Carousel</a></li>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/landingpage') }}">Landing Page</a></li>
            <li><a href="{{ url('/purchasedform') }}">Purchased Form</a></li>
            <li><a href="{{ url('/thankyou') }}">Thank You</a></li>
            <li><a href="{{ url('/welcome') }}">Welcome</a></li>
            <li><a href="{{ url('/abous') }}">aboutus</a></li>
        </ul>
    </nav>

    {{-- Content from child views will go here --}}
    <div>
        @yield('content')
    </div>

</body>
</html>
