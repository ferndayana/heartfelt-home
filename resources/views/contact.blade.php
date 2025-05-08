<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heartfelt Homes</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
             
        }
    .container{
        background-color: white;
        width: 85%;
        height: 20%;
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


        

header {
    position: relative;
    background-image: url('{{ asset('images/landingpage/image1.jpg') }}');
    background-size: 100%; 
    background-position: center;
    height: 100vh;
    color: black;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
}
        header h1 {
            font-family: luckiest guy;
            font-size: 4rem;
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
           

        }

        .social-icons {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            font-size: 1.5rem;
        }

        .social-icons a {
            color:white;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: rgb(255, 255, 255);
        }

        footer {
    background-color:rgba(228, 233, 237) 1!important;
    color: black !important; 
    padding: 20px;
    flex-direction: column; 
    align-items: center;
    text-align: center;
}

footer h5 {
    font-size: 1rem;
    margin-bottom: 10px;
    text-align: center;
    color: black;
}

footer a {
    display: block;
    color: black; 
    text-decoration: none;
    margin-bottom: 10px;
    padding: 2px;
    margin-top: auto;
    text-align: center;
}

footer a:hover {
    text-decoration: underline; 
}

.container-fluid {
    color: white; 
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
            <li class="nav-item">
    <a class="nav-link" href="{{ route('allbreeds') }}" style="color: black;">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('blog') }}" style="color: black;">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('allbreeds') }}" style="color: black;">Adoption</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('aboutus') }}" style="color: black;">About us</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('contact') }}" style="color: black;">Contact us</a>
</li>

            </ul>
        </div>
    </div>
</nav>
<header class="container-fluid text-center">
    <h1>Heartfelt Homes</h1>
    
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank">
            <i class="fab fa-facebook"></i> 
        </a>
        <a href="https://www.instagram.com" target="_blank">
            <i class="fab fa-instagram"></i> 
        </a>
        <a href="tel:+09854731205">
            <i class="fas fa-phone-alt"></i> 
        </a>
    </div>
</header>

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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
