<?php require_once 'controllers/authController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register with Faid</title>
    <link rel="stylesheet" href="./styles/register.css">
</head>

<body>
    <div class="signup-container">
    <form class="signup-form" action="register.php" method="POST">
    <h1>Join Our Community</h1>
    <p>Unlock amazing features by signing up today!</p>
    <div class="form-group">
        <input type="text" id="first-name" name="name" placeholder="Full Names" required value="<?php echo $name ?>">
    </div>
    <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
    </div>
    <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
    </div>
    <button type="submit" name="register">Sign Up</button>
    <p class="sub">Already registered? <a href="./login.php">Login</a></p>
</form>

    </div>
</body>

</html>