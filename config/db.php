<?php
// Database connection for Janani app (XAMPP)
// Configure here if needed
$DB_NAME = 'janani_db';
$DB_USER = 'root';
$DB_PASS = '';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Try multiple host/port combos commonly used in XAMPP
$DB_TARGETS = [
    ['host' => '127.0.0.1', 'port' => 3306],
    ['host' => 'localhost', 'port' => 3306],
    ['host' => '127.0.0.1', 'port' => 3307], // alternate port if 3306 busy
];

$pdo = null;
$lastException = null;
$connectionError = '';

foreach ($DB_TARGETS as $t) {
    $host = $t['host'];
    $port = $t['port'];
    $dsn = "mysql:host={$host};port={$port};dbname={$DB_NAME};charset=utf8mb4";
    try {
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        // Test the connection
        $pdo->query('SELECT 1');
        break; // success
    } catch (PDOException $e) {
        $connectionError = "Failed to connect to {$host}:{$port} - " . $e->getMessage() . "\n";
        error_log($connectionError);
        $lastException = $e;
        $pdo = null; // Ensure $pdo is null if connection fails
        // try next target
    }
}

if ($pdo === null) {
    die("DB CONNECTION ERROR: " . $lastException->getMessage());
}

