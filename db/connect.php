<?php

$servername = "localhost";
$dsn = "mysql:host=$servername;dbname=helpdesk";
$username = "root";
$password = "";

try {
    $connection = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>