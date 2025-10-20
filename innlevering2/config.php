<?php
// Database configuration
$DB_HOST = 'mysql.usn.no';  // Direct connection to USN MySQL server
$DB_NAME = 'stpet1155';
$DB_USER = 'stpet1155';
$DB_PASS = 'd991stpet1155';

try {
    $pdo = new PDO(
        "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>