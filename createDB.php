<?php

include "connection.php";


$createDB = "CREATE DATABASE IF NOT EXISTS registration";

if ($conn->query($createDB) == TRUE) {
    echo "Database created successfully. Or database already exists";
} else {
    echo "Error creating database" . $conn->error;
}
