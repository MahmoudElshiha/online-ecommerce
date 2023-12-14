<?php

session_start();

include './db_conn.php';

$user_id = $_SESSION['id'];

$stmt = $conn->prepare("DELETE FROM cart WHERE cart.user_id = '$user_id'");


if ($stmt->execute()) {
    header("Location: ../cart.php");
} else {
    $error_msg = "Error: " . $stmt->errorInfo()[2];
    header("Location: ../cart.php?error=$error_msg");
}
