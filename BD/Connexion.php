<?php

$servername = "localhost";
$username = "root";
$password = "";
$Dbnom = "gestiondecabinet";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$Dbnom", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
