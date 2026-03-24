<?php
/**
 * Database Configuration for Hostinger
 * 
 * Replace the values below with your actual Hostinger MySQL details:
 * 1. Go to Hostinger Panel -> Databases -> MySQL Databases
 * 2. Copy the 'MySQL Database', 'MySQL User', and 'MySQL Host' values.
 */
$host = 'localhost';
$db_name = 'u848520183_lababdar';
$username = 'u848520183_lababdar'; // ✅ yaha actual DB user daal
$password = 'Bunty@97296';
// Enable error reporting for debugging (Remove this in final production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $username, $password);
    
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Disable emulated prepared statements for better security
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    // On Hostinger, if this fails, it's likely wrong credentials
    die("Database Connection Error: " . $e->getMessage());
}

/**
 * Helper function to clean input data
 */
function clean_input($data) {
    if (is_null($data)) return "";
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// Start session securely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
