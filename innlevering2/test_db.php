<?php
require_once 'config.php';

try {
    // Test 1: Check if we can connect to the database
    echo "Test 1: Database connection... ";
    if ($pdo instanceof PDO) {
        echo "SUCCESS\n";
    }

    // Test 2: Check if klasse table exists and has data
    echo "Test 2: Checking klasse table... ";
    $stmt = $pdo->query("SELECT COUNT(*) FROM klasse");
    $count = $stmt->fetchColumn();
    echo "Found $count records\n";

    // Test 3: Check if student table exists and has data
    echo "Test 3: Checking student table... ";
    $stmt = $pdo->query("SELECT COUNT(*) FROM student");
    $count = $stmt->fetchColumn();
    echo "Found $count records\n";

    // Test 4: Test join between tables
    echo "Test 4: Testing table relationships... ";
    $stmt = $pdo->query("SELECT s.brukernavn, k.klassenavn 
                        FROM student s 
                        JOIN klasse k ON s.klassekode = k.klassekode 
                        LIMIT 1");
    $result = $stmt->fetch();
    if ($result) {
        echo "SUCCESS\n";
    }

} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
?>