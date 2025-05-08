<?php

$host = "localhost";
$dbname = "heartfelt_homes";
$username = "root";
$password = "";

try {
 
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $user = isset($_POST['username']) ? $_POST['username'] : null;
        $pass = isset($_POST['password']) ? $_POST['password'] : null;

        if ($user && $pass) {
            
            $checkSql = "SELECT * FROM admins WHERE username = :username";
            $checkStmt = $conn->prepare($checkSql);
            $checkStmt->bindParam(':username', $user);
            $checkStmt->execute();

            if ($checkStmt->rowCount() > 0) {
        
                echo "<script>
                    alert('User already registered!');
                 window.location.href = 'ADMIN_DASHBOARD.php';
                </script>";
            } else {
               
                $hashedPass = password_hash($pass, PASSWORD_DEFAULT); 
                $sql = "INSERT INTO admins (username, password) VALUES (:username, :password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':username', $user);
                $stmt->bindParam(':password', $hashedPass);
                $stmt->execute();

              
                echo "<script>
                    alert('User successfully registered!');
                    window.location.href = 'ADMIN_DASHBOARD.php';
                </script>";
            }
        } else {
            echo "<script>
                alert('Please fill all fields!');
                window.history.back();
            </script>";
        }
    }
} catch (PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}


$conn = null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heartfelt Homes</title>
    
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
    color: white;
}

.header {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 20px 50px;
    background: rgba(0, 0, 0, 0.3);
}

.header h1 {
    font-size: 1vw ;
    animation: slideInFromRight 1s ease-out; 
}
@keyframes slideInFromRight {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(0);
    }

}

.header nav a {
    font-weight: bold;
    color: black;
    text-decoration: none;
    margin: 0 10px;
}
.header nav a:hover{
    text-decoration: underline ;
    color: rgb(255, 255, 255);
}

.main-content {
    flex: 1%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    width: 100%;
    max-width: 1200px;
}

.text h2 {
    text-align: center;
    font-family: luckiest guy;
    font-size: 5rem;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
    animation: slideInFromRight 1s ease-out; 

}



.login-form {
    
    background: rgba(255, 255,255,0.5);
    backdrop-filter: blur(30px);
    margin-top: 200px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    animation: slideInFromRight 1s ease-out; 
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
    background-color: burlywood;
}
.login-form button i {
    margin-right: 10px; 
}

.login-form .links a {
    color: #333;
    text-decoration: none;
    font-size: 0.9vw;
}

.login-form .links a:hover {
    text-decoration: underline;
}
 </style></head>

<body>
    <div class="container">

        <div class="main-content">
            <div class="text">
                <h2>HEARTFELT HOMES</h2>
           
            </div>

            <div class="login-form">
                <p>WELCOME TO ADMIN DASHBOARD</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Sign in</button>
</form>
                       
                </div>
                </form>
               
            </div>
            <div class="back">
                <form action="landingpage.php">
             <button type="back">Back</button></form>
        
        </div>
    </div>
        
    </div>
</body>
</html>