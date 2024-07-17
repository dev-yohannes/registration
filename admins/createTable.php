<?php

include "../connection.php";

$conn->select_db('registration');

// $dropTable = "DROP TABLE IF EXISTS registrationTable";

// if ($conn->query($dropTable) === TRUE) {
//     echo "Table dropped successfully. <br>";
// } else {
//     echo "Error dropping table: " . $conn->error . "<br>";
// }

$createTable = "CREATE TABLE IF NOT EXISTS admins (
    aID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    aUsername VARCHAR(30) NOT NULL,
    aFirstName VARCHAR(30) NOT NULL,
    aLastName VARCHAR(30) NOT NULL,
    aEmail VARCHAR(50) NOT NULL,
    aPassword VARCHAR(255) NOT NULL,
    aStatus INT(10) DEFAULT 1
)";

if ($conn->query($createTable) === TRUE) {
    echo "Table created successfully. Or table already exists.";
} else {
    echo "Error creating table: " . $conn->error;
}
