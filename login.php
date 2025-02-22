
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
        .login-container {
            background: white;
            padding: 90px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            position: relative;
        }
        .login-container h2 {
            margin-bottom: 15px;
        }
        .login-container input {
            width: 130%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            border: none;
            background: linear-gradient(to right, #56CCF2, #2F80ED);
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-container button:hover {
            background: linear-gradient(to right, #2F80ED, #56CCF2);
        }
        .forgot-password, .signup {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #2F80ED;
            text-decoration: none;
            transition: 0.3s;
        }
        .forgot-password:hover, .signup:hover {
            text-decoration: underline;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <a href="index.php">Back</a>
        <span class="close"><a href="index.php">&times;</a></span>
        <h2>Login Form</h2>
        <form action="login_process.php" method="POST">
            <input type="text" name="email" placeholder="Email or Phone" required>
            <input type="password" name="password" placeholder="Password" required>
            <br><br>
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>
