<?php
if (isset($_POST['pick_cat'])) {   
    header("Location: CAT.php"); 
    exit();
}

if (isset($_POST['pick_dog'])) {
    
    header("Location: DOG.php"); 
    exit();
}
if (isset($_POST['Adopt_now'])) {
    
    header("Location: ONLINE_PURCHASE_FROM.php"); 
    exit();
}
if (isset($_POST['Free_Rehoming'])) {
    
    header("Location: ONLINE_PURCHASE_FORM.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Webpage</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
            
        background-color: #f8f9fa;
          
}

.container{
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



.banner {
        font-family: luckiest Guy;
          border: #f8f9fa;
        text-align: center;
        padding: 60px 60px 60px 60px;
        background: url('image9.jpg') no-repeat center center/cover;
        color: white;
}
.banner h1 {
    
        font-family: luckiest Guy;
        font-size: 2rem;
       
}
.banner .btn{
        background-color: rgb(255, 196, 119);
        border: none;
        color: #000;
        margin-left: 25px;
        padding: 10px 10px ;
        border-radius: 24px;
        transition: background-color 0.3s;
        cursor: pointer;

}
.banner .btn:hover{
    color: rgba(0, 0, 0, 0.577);
border: 50px #000;


}
.card-wrapper {
        position: relative;
        overflow: hidden;
}
.card {
        position: relative;
        width: 100%;
        height: 100%;
        background-color: white;
        transition: transform 0.5s ease, opacity 0.5s ease;
}
.card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
}
.card .card-body {
        padding: 15px;
}
.card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.818);
        color: rgb(0, 0, 0);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transform: translateY(100%);
        transition: transform 1s ease;
        text-align: center; /* Center-align the text */
}

.card-overlay p {
        margin-left: 25px;
        text-align: left;
        font-family: sans-serif;
}

.card-overlay .btn {
        background-color: rgb(206, 185, 136);
        border: none;
        color: #000;
      
        transition: background-color 0.3s;
        cursor: pointer;
}

.card-overlay .btn:hover {
        background-color: rgb(255, 211, 128);
        color: white;
}


.card-wrapper:hover .card-overlay {
        transform: translateY(0);
}
footer {
    background-color:rgba(228, 233, 237) 1!important;
    color: black !important; 
    padding: 20px;
    flex-direction: column; 
    align-items: center; 
    text-align: center;
    border-top: black solid ;
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
        
.banner:hover {
        background-color: rgb(230, 138, 19);
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
    <a class="nav-link" href="{{ route('about') }}" style="color: black;">About us</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('contact') }}" style="color: black;">Contact us</a>
</li>

            </ul>
        </div>
    </div>
</nav>
<div class="banner">
    <h1>home is where someone runs to greet you!</h1>
    <p>Adopt a pet and save a life; it’s the ultimate act of kindness.</p>
    
    
    <form action="" method="POST">
        <button class="btn" type="submit" name="pick_cat">Pick a Cat</button>
        <button class="btn" type="submit" name="pick_dog">Pick a Dog</button>
    </form>
</div>


<div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <form action="ONLINE_ADAPTION_FORM.php">     <div class="card-wrapper">
                <div class="card">
                    <img src="catie1.jpg" alt="Aliyah">
                    <div class="card-body">
                        <h5 class="card-title">Xuyua</h5>
                        <p class="card-text">Breed:Sphynx </p>
                    </div>
                </div>
                <div class="card-overlay">
                    <p><b>Gender:</b> Male
                        <br><b>Age:</b>  2 years old
                        <br> <b>Health Status:</b> Healthy
                        <br> <b>Personal traits:</b>  Playful, Attention-Seeking, Calm and Alert
                        <br><b>Adoption Fee:</b> ₱10,000
                    </p>
                    <button class="btn">Adopt Now</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-wrapper">
                <div class="card">
                    <img src="catie2.jpg" alt="Laurenya">
                    <div class="card-body">
                        <h5 class="card-title">Laurenya</h5>
                        <p class="card-text">Breed:Siamese</p>
                    </div>
                </div>
                <div class="card-overlay">
                    <p><b>Gender:</b> Male
                        <br><b>Age:</b>  10 months old
                        <br> <b>Health Status:</b> Healthy
                        <br> <b>Personal traits:</b>  Friendly, Low-Exercise Needs, Gentle and Good with Children
                        <br><b>Adoption Fee:</b> ₱10,000
                    </p>
                    <button class="btn">Adopt Now</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-wrapper">
                <div class="card">
                    <img src="catie33.jpg" alt="Xylea">
                    <div class="card-body">
                        <h5 class="card-title">Xylea</h5>
                        <p class="card-text">Breed: Scottish Fold</p>
                    </div>
                </div>
                <div class="card-overlay">
                    <p><b>Gender:</b> Male
                        <br><b>Age:</b>  1 months old
                        <br> <b>Health Status:</b> Healthy
                        <br> <b>Personal traits:</b>  Friendly, Territorial, Observant and Clean
                        <br><b>Adoption Fee:</b> ₱10,000
                    </p>
                    <button class="btn">Adopt Now</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-wrapper">
                <div class="card">
                    <img src="catie4.jpg" alt="Leo">
                    <div class="card-body">
                        <h5 class="card-title">Leo</h5>
                        <p class="card-text">Breed: Golden retriever</p>
                    </div>
                </div>
                <div class="card-overlay">
                    <p><b>Gender:</b> Male
                        <br><b>Age:</b>  3 months old
                        <br> <b>Health Status:</b> Handicapped
                        <br> <b>Personal traits:</b> Affectionate, Resilient, Brave, Loyal and Devoted
                        <br><b>Adoption Fee:</b> ₱10,000
                    </p>
                    <button class="btn">Adopt Now</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-wrapper">
                <div class="card">
                    <img src="catie5.jpg" alt="Lucy">
                    <div class="card-body">
                        <h5 class="card-title">Lucy</h5>
                        <p class="card-text">Breed: British</p>
                    </div>
                </div>
                <div class="card-overlay">
                    <p>Gender: Male
                        <br> Age: 4 months old
                        <br> Health Status: Healthy
                        <br> Personal traits: Intelligent, Observant, Adaptable, Gentle and Good with Children
                        <br>Adoption Fee: ₱10,000
                    </p>
                    <button class="btn">Free rehoming</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-wrapper">
                <div class="card">
                    <img src="catie6.jpg" alt="Simba">
                    <div class="card-body">
                        <h5 class="card-title">Simba</h5>
                        <p class="card-text">Breed: Orange</p>
                    </div>
                </div>
                <div class="card-overlay">
                    <p>Gender: Male
                        <br> Age: 1 month old
                        <br> Health Status: Handicapped
                        <br> Personal traits: Friendly, Adaptable, Gentle and Good with Children
                        <br>Adoption Fee: ₱10,000
                    </p>
                    <button class="btn">Adopt Now</button></form>
                </div>
                
            </div>
        </div>
    </div>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

