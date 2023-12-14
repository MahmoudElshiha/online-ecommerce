<?php
include './db_conn.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$stmt = $conn->prepare("INSERT INTO users (username , password ) VALUES ( ? , ? )");

$stmt->bindParam(1, $username);
$stmt->bindParam(2, $password);


if ($stmt->execute()) {
    header("Location: ../home.php");
} else {
    $error_msg = "Error: " . $stmt->errorInfo()[2];
    header("Location: ../user_register.php?error=$error_msg");
}
