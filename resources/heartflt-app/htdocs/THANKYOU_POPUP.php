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
            justify-content: center;
            align-items: center;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            backdrop-filter: blur(50px);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .login-form {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(30px);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            animation: slideInFromRight 0.5s ease-out;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        @keyframes slideInFromRight {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        .login-form p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .login-form button {
            width: 100%;
            padding: 15px;
            background-color: rgba(165, 95, 42, 0.729);
            backdrop-filter: blur(10px);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: burlywood;
        }

        .login-form .links a {
            color: #333;
            text-decoration: none;
            font-size: 0.9vw;
        }

        @media (max-width: 768px) {
            .login-form p {
                font-size: 1rem;
            }

            .login-form button {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-content">
            <div class="login-form">
                <p>"Congratulations on your new furry friend!<br> May your home be filled with wagging tails and purring cuddles.<br> Here’s to countless adventures and unconditional love ahead!"</p>
                <form action="allbreeds.html">
                    <button type="submit">Back</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
