<?php
// Database connection using PDO and environment variables
$host = $_ENV['DB_HOST'] ?? $_SERVER['DB_HOST'] ?? '127.0.0.1';
$db   = $_ENV['DB_NAME'] ?? $_SERVER['DB_NAME'] ?? 'prg120v_db';
$user = $_ENV['DB_USER'] ?? $_SERVER['DB_USER'] ?? 'root';
$pass = $_ENV['DB_PASS'] ?? $_SERVER['DB_PASS'] ?? '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    http_response_code(500);
    echo "Database-tilkobling feilet: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
