<?php

include "connection.php";

$conn->select_db('registration');

// $dropTable = "DROP TABLE IF EXISTS registrationTable";

// if ($conn->query($dropTable) === TRUE) {
//     echo "Table dropped successfully. <br>";
// } else {
//     echo "Error dropping table: " . $conn->error . "<br>";
// }

$createTable = "CREATE TABLE IF NOT EXISTS registrationTable (
    tID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tUsername VARCHAR(30) NOT NULL,
    tFirstName VARCHAR(30) NOT NULL,
    tLastName VARCHAR(30) NOT NULL,
    tEmail VARCHAR(50) NOT NULL,
    tPassword VARCHAR(255) NOT NULL,
    tStatus INT(10) DEFAULT 0
)";

if ($conn->query($createTable) === TRUE) {
    echo "Table created successfully. Or table already exists.";
} else {
    echo "Error creating table: " . $conn->error;
}
