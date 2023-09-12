<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form" action="login.php" method="POST">
            <h1>Login</h1>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Log In</button>
            <p class="sub">Not registered? <a href="./register.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>
