<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required> <br>

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" required> <br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" required> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required> <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required> <br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="confirmPassword" required> <br>

        <div class="submit-container">
            <input type="submit" name="submit" value="Register">
        </div>
    </form>

</body>

</html>

<?php

include "../connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userUsername = $_POST['username'];
    $userFirstname = $_POST['firstname'];
    $userLastname = $_POST['lastname'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userConfirmPassword = $_POST['confirmPassword'];

    if ($userPassword !== $userConfirmPassword) {
        die("Password doesn't match. Check again.");
    }
}

?>