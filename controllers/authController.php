<?php
session_start();
require 'config/db.php';
$errors = array();
$username = "";
$email = "";

// If the user clicks the Register Button
if (isset($_POST['register'])) {
    $username = $_POST["username"]; // Get Username from Form
    $email = $_POST["email"];       // Get Email From Form
    $password1 = $_POST["password"];    // Get Password From Form
    $password2 = $_POST["confirm-password"];    // Repeat password form

    // Validation
    if (empty($username)) {
        $errors['username'] = "Username is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Enter a valid Email";
    } elseif (empty($email)) {
        $errors['email'] = "Email is required";
    }

    if (empty($password1)) {
        $errors['password'] = "Password is required";
    } elseif ($password1 !== $password2) {
        $errors['password'] = "Passwords must match";
    }

    // Email must be Unique
    $emailQuery = "SELECT * FROM users WHERE userEmail=? LIMIT 1";
    $stmtEmail = $conn->prepare($emailQuery);
    $stmtEmail->bind_param("s", $email);
    $stmtEmail->execute();
    $result = $stmtEmail->get_result();
    $userCount = $result->num_rows;
    $stmtEmail->close();

    if ($userCount > 0) {
        $errors['email'] = "Email already exists";
    }

    // Check errors
    if (empty($errors)) {
        // Hash or Encrypt our Password
        $password1 = password_hash($password1, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(20));
        $verified = false;

        // Save User into our Database
        $sql = "INSERT INTO users (userName, userEmail, verified, token, password) VALUES(?, ?, ?, ?, ?)";
        $stmtInsert = $conn->prepare($sql);
        $stmtInsert->bind_param("ssbss", $username, $email, $verified, $token, $password1);

        if ($stmtInsert->execute()) {
            // Login User
            $user_id = $stmtInsert->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;
            // Flash a message
            $_SESSION["Message"] = "You're now registered and logged in";
            $_SESSION['alert-class'] = "alert-success";
            echo "Success register";
            header('location: login.php');

            exit();
        } else {
            $errors["db_error"] = "Registration not successful";
        }
    }
}
?>
