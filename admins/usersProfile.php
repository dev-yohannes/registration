<?php

include "../connection.php";

$conn->select_db('registration');

$viewUProfile = "SELECT * FROM users";
$result = $conn->query($viewUProfile);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
// } else {
//     echo "User not found.";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Profile</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['tID'] . "</td>";
                echo "<td>" . $row['tUsername'] . "</td>";
                echo "<td>" . $row['tFirstName'] . "</td>";
                echo "<td>" . $row['tLastName'] . "</td>";
                echo "<td>" . $row['tEmail'] . "</td>";
                echo "<td>" . $row['tStatus'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No users found</td></tr>";
        }
        ?>
    </table>
</body>

</html>