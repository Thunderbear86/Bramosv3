<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // Set to 1 since this is for your live environment

if(CONFIG_LIVE == 1){
    // Real live database connection details
    $DB_SERVER = "mysql1.unoeuro.com";  // Your MySQL hostname
    $DB_PORT = 3306;                    // Your MySQL port
    $DB_NAME = "bramos_dk_db";          // Your primary MySQL database
    $DB_USER = "bramos_dk";             // Your MySQL username
    $DB_PASS = "3c5n6Gtmg49Fz2HrhBEp";  // Your MySQL password
} else {
    // Test environment details (local development settings)
    $DB_SERVER = "localhost";
    $DB_PORT = 3306;                    // Default MySQL port
    $DB_NAME = "bramos";
    $DB_USER = "root";
    $DB_PASS = "";                      // Add a password if your local environment requires it
}

// Create a new database object using PDO
try {
    $db = new PDO("mysql:host=$DB_SERVER;port=$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
