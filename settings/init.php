<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "bramos";  // Opdateret til din faktiske database navn
    $DB_USER = "root";
    $DB_PASS = "";  // Tilføj password her, hvis det er nødvendigt
}else{
    // Udfyld med faktiske live-databaseoplysninger
    $DB_SERVER = "live_server";
    $DB_NAME = "live_database";
    $DB_USER = "live_user";
    $DB_PASS = "live_password";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);