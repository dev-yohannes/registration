<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required> <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required> <br>

        <input type="submit" name="submit" value="Login">
    </form>

</body>

</html>

<?php
session_start();

include "../connection.php";

$conn->select_db('registration');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE aUsername = '$loginUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($loginPassword === $row['aPassword']) {
            $_SESSION['sess_ID'] = $row['aID'];
            $_SESSION['sess_username'] = $row['aUsername'];
            $_SESSION['sess_firstname'] = $row['aFirstName'];
            $_SESSION['sess_lastname'] = $row['aLastName'];

            header("Location: landingPage/index.php");
            exit;
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "The user doesn't exist on the database";
    }
}
