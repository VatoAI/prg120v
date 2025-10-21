<?php
// Protected setup endpoint to run setup.sql once. Protect with a secret query parameter.
$secret = $_GET['secret'] ?? null;
if ($secret !== ($_ENV['SETUP_SECRET'] ?? '')) {
    http_response_code(403);
    echo "Forbidden. Provide the correct secret as ?secret=...";
    exit;
}

$sqlFile = __DIR__ . '/setup.sql';
if (!file_exists($sqlFile)) {
    echo "setup.sql not found.";
    exit;
}

require_once __DIR__ . '/db.php';

try {
    $sql = file_get_contents($sqlFile);
    $pdo->exec($sql);
    echo "Setup executed successfully.";
} catch (PDOException $e) {
    http_response_code(500);
    echo "Error executing setup: " . htmlspecialchars($e->getMessage());
}
?>
