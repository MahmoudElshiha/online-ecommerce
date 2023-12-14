<?php

session_start();

include './db_conn.php';

$user_id = $_SESSION['id'];
$element_id = $_REQUEST['element_id'];

$stmt = $conn->prepare("DELETE FROM cart WHERE cart.element_id = '$element_id'");


if ($stmt->execute()) {
    header("Location: ../cart.php");
} else {
    $error_msg = "Error: " . $stmt->errorInfo()[2];
    header("Location: ../cart.php?error=$error_msg");
}
