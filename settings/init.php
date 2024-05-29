<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // Set to 1 since this is for your live environment

if(CONFIG_LIVE == 1) {
    $DB_SERVER = "mysql1.unoeuro.com";
    $DB_NAME = "bramos_dk_db";
    $DB_USER = "bramos_dk";
    $DB_PASS = "3c5n6Gtmg49Fz2HrhBEp";
} else {
    $DB_SERVER = "localhost";
    $DB_NAME = "bramos";
    $DB_USER = "root";
    $DB_PASS = "";
}

// Create a new database object using your db class
$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
?>
