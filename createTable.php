<?php

include "connection.php";

$conn->select_db('registration');

// $dropTable = "DROP TABLE IF EXISTS registrationTable";

// if ($conn->query($dropTable) === TRUE) {
//     echo "Table dropped successfully.";
// } else {
//     echo "Error dropping table: " . $conn->error;
// }

$createTable = "CREATE TABLE IF NOT EXISTS (
    tID INT(10) AUTO_INCREMENT PRIMARY KEY,
    tUsername VARCHAR(30) NOT NULL,
    tFirstName VARCHAR(30) NOT NULL,
    tLastName VARCHAR(30) NOT NULL,
    tEmail VARCHAR(30) NOT NULL,
    tPassword VARCHAR (30) NOT NULL
)";

if ($conn->query($createTable) == TRUE) {
    echo "Table created successfully. Or table already exists";
} else {
    echo "Error creating table " . $conn->error;
}
