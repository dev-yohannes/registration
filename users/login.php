<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
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

    $sql = "SELECT * FROM users WHERE tUsername = '$loginUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['tStatus'] == 0) {
            echo "Your account has not been activated. Contact the admins.";
        } else {
            if ($loginPassword === $row['tPassword']) {
                $_SESSION['sess_ID'] = $row['tID'];
                $_SESSION['sess_username'] = $row['tUsername'];
                $_SESSION['sess_firstname'] = $row['tFirstName'];
                $_SESSION['sess_lastname'] = $row['tLastName'];

                header("Location: landingPage/index.html");
                exit;
            } else {
                echo "Invalid username or password";
            }
        }
    } else {
        echo "The user doesn't exist on the database";
    }
}
