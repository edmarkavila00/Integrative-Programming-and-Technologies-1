
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('image/it-sector.jpg.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
        }
        .login-box {
            width: 320px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
        .input-box {
            margin: 15px 0;
            position: relative;
        }
        .input-box input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }
        .remember {
            text-align: left;
            margin: 10px 0;
            font-size: 14px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            background: linear-gradient(90deg, #4CAF50, #8BC34A);
            color: white;
            font-weight: bold;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .signup {
            margin-top: 15px;
            font-size: 14px;
        }
        .signup a {
            color: #fff;
            text-decoration: underline;
        }
        .result {
            color: white;
            font-size: 18px;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <?php if (!isset($_GET['username']) || !isset($_GET['password'])): ?>
        <!-- Show login box only if form not yet submitted -->
        <div class="login-box">
            <h2>Login</h2>
            <form method="get" action="login.php">
                <div class="input-box">
                    <input type="text" name="username" placeholder="User Name" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember"> Remember me
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <div class="signup">
                Don’t have an account? <a href="#">Signup</a>
            </div>
        </div>
    <?php else: ?>
        <!-- Show result instead -->
        <div class="result">
            <h2>Welcome, <?php echo htmlspecialchars($_GET['username']); ?>!</h2>
            <p>Login successful ✅</p>
        </div>
    <?php endif; ?>
</body>
</html>

 

 



    