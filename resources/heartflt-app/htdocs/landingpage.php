
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heartfelt Homes</title>
    <link rel="stylesheet" href="landing.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body, html {
    height: 100%;
}

.container {
    background: url('image1.png.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    color: rgb(255, 247, 247);
}

.header {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 20px 50px;
    background: rgba(0, 0, 0, 0.0);
}
 
.header h1 {
    font-size: 2vw;
    font-family: luckiest Guy, cursive;
    display: flex;
    align-items:center ;
    text-shadow:2px 2px 2px black;
    gap: 10px;
    animation: slideInFromLeft 1s ease-out; 
}
.header i.bi-house-heart-fill{
    color: white;
    font-size: 2.5vw;
}
@keyframes slideInFromLeft {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(0);
    }}


.main-content {
    flex: 1;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    width: 100%;
    max-width: 1200px;
}

.text h2 {
    font-size: 4vw;
    font-family: luckiest Guy;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
    animation: slideInFromLeft 1s ease-out; 
}

.text p {
    font-size: 2vw;
    margin-top: 10px;
    font-family: luckiest Guy;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
    animation: slideInFromLeft 1s ease-out; 
}

.login-form {
    background: rgba(255, 255,255,0.5);
    backdrop-filter: blur(30px);
    padding: 20px 10px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    animation: slideInFromRight 1s ease-out; 
    margin: 10px 20px 10px 20px;
}
@keyframes slideInFromRight {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(0);
    }
}

.login-form input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding-left: 35px; 
}

.login-form input[type="email"] {
    background: url('https://img.icons8.com/ios/452/email-open.png') no-repeat 10px center;
    background-size: 20px;
}

.login-form input[type="password"] {
    background: url('https://img.icons8.com/ios/452/lock.png') no-repeat 10px center;
    background-size: 20px;
}

.login-form button {
    width: 100%;
    padding: 10px;
    background-color: rgba(165, 95, 42, 0.729);
    backdrop-filter: blur(10px);
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-form button a:hover {
    background-color: rgb(234, 180, 111);
}
.login-form button i {
    margin-right: 10px; 
}

.login-form .links a {
    color: #333;
    text-decoration: none;
    font-size: 0.9rem;
}

.login-form .links a:hover {
    text-decoration: underline;
}

</style>

<body>
    <div class="container">
        <div class="header">
            <h1> <i class="bi bi-house-heart-fill"></i>H E A R T F E L T   H O M E S</h1>
           
        </div>

        <div class="main-content">
            <div class="text">
                <h2>Find Your Pawfect <br>Companion Today!</h2>
                <p>Every tailwag tells a story. Start yours with adoption!</p>
            </div>

            <div class="login-form">
                <form action="allbreeds.php" method="POST">
                   
                    <input type="email" placeholder="Email" required>
                   
                    <input type="password" placeholder="Password" required>
                  
                    <button type="submit">
                        <i class="fas fa-sign-in-alt"></i> Log in
                    </button>
                    <div class="links">
                        <a href="#">Forgot password?</a><br>
                        <a href="signin.php">New User?<u>Sign in</u> </a><br>
                        <a href="ADMIN.php">Login as Admin </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
