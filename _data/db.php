<?php

date_default_timezone_set('Asia/Kolkata');

$servername = "localhost";
$username = "cptlaro_webu";
$password = "BMS5~9(()w6z";
$dbname = "cptlaro_webd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
} 

?> 