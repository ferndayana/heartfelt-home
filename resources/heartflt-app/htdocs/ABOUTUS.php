<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Heartfelt Homes</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        html {
            height: 100%;
            margin: 0;
            font-family: Arial;
            animation: slideInFromRight 1s ease-out; 
        }

        .container{
            width: 85%;
            height: 20%;
        }

        .hero {
            background: url('image1.png.jpg') no-repeat center center/cover;
            backdrop-filter: blur(40px);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-weight: bold;
        }

        .hero h1 {
            margin-top: 20pt;
            font-size: 2.5em;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
            animation: slideInFromRight 1s ease-out;
        }

        .hero p {
            color: white;
            font-size: 1.2em;
            max-width: 800pt;
            margin: 10px auto;
            line-height: 1.6;
        }

        .hero .btn {
            margin: 20px 10px 30px 20px;
            background-color: rgba(165, 95, 42, 0.8);
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
        }

        .hero .btn a:hover{
             background-color: bisque;
        }

       
        .about-us-box {
            background-color: rgba(255, 255, 255, 0.85); 
            padding: 30px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); 
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-us-box p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
        }

        footer {
            background-color: rgba(228, 233, 237) 1!important;
            color: black !important;
            padding: 20px;
            text-align: center;
            border-top: black solid;
        }

        footer h5 {
            font-size: 1rem !important;
            margin-bottom: 10px;
            color:black; 
        }

        footer a {
            display: block;
            color: black; 
            text-decoration: none;
            margin-bottom: 10px;
        }

        footer a:hover {
            text-decoration: underline; 
        }

        .navbar {
            background-color: white;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            font-family: Luckiest Guy;
            color: black;
            margin-left: -100px;
        }

        .nav-link{
            color: black;
        }
    </style>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">H E A R T F E L T H O M E S</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('allbreeds') }}" style="color: black;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}" style="color: black;">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('allbreeds') }}" style="color: black;">Adoption</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}" style="color: black;">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}" style="color: black;">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="hero">
        <h1>About Us</h1>
        
       
        
        <div class="about-us-box">
            <p> Welcome to Heartfelt Homes! We’re dedicated to making online pet adoption easy and accessible, connecting loving families with pets in need of forever homes.
            Our platform features a variety of adorable dogs and cats from local shelters and rescues, ensuring that you can find the perfect companion that fits your lifestyle.
            Each pet profile includes photos and detailed information to help you make an informed decision. We believe in responsible adoption and provide support throughout the entire process.
            Join us in giving pets a second chance at happiness. Start your journey to find your new best friend today!</p>
        </div>

        <form action="DONAATION.php">
            <button class="btn">Donate to us</button>
        </form>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4">
                <h5>Explore</h5>
                <a href="#">Design</a>
                <a href="#">Prototyping</a>
                <a href="#">Design Systems</a>
            </div>
            <div class="col-12 col-md-4">
                <h5>Resources</h5>
                <a href="#">Blog</a>
                <a href="#">Colors</a>
            </div>
            <div class="col-12 col-md-4">
                <h5>Use Cases</h5>
                <a href="#">UI Design</a>
                <a href="#">Wireframing</a>
                <a href="#">Team Collaboration</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
