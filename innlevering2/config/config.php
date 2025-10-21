<?php
// Database configuration
$host = 'mysql.usn.no';  // Direct connection to USN MySQL server
$dbname = 'stpet1155';
$username = 'stpet1155';
$password = 'd991stpet1155';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Could not connect to the database $dbname: " . $e->getMessage());
}
?>