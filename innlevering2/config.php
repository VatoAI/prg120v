<?php
// Database configuration
$DB_HOST = 'mysql.usn.no';  // Direct connection to USN MySQL server
$DB_NAME = 'stpet1155';
$DB_USER = 'stpet1155';
$DB_PASS = 'd991stpet1155';

// Create connection using mysqli
$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to utf8mb4
mysqli_set_charset($db, 'utf8mb4');
}
?>