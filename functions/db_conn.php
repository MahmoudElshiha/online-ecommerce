<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "test123";

try {
  $conn = new PDO(
    "mysql:host=$sName;dbname=$db_name;charset=utf8mb4",
    $uName,
    $pass
  );
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed : " . $e->getMessage();
}
