<?php
session_start();

if (!isset($_SESSION['sess_ID'])) {
    header("Location: login.php");
    exit;
}

include "../connection.php";

$conn->select_db('registration');


$adminID = $_SESSION['sess_ID'];

$viewAProfile = "SELECT * FROM admins WHERE aID = '$adminID'";
$result = $conn->query($viewAProfile);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Admin profile not found.";
    exit();
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <tr>
            <td><?php echo $row['aID'] ?></td>
            <td><?php echo $row['aUsername'] ?></td>
            <td><?php echo $row['aFirstName'] ?></td>
            <td><?php echo $row['aLastName'] ?></td>
        </tr>
    </table>
</body>

</html>