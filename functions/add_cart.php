<?php

session_start();

include './db_conn.php';

$product_id = $_REQUEST['product_id'];
$amount = $_REQUEST['amount'];

// make sure the user is logged in ...
if (!isset($_SESSION['username'])) {
    header("Location: ../sproduct.php?product_id=$product_id&&error=1");
    exit();
}

$user_id = $_SESSION['id'];

$stmt = $conn->prepare("INSERT INTO cart (user_id , product_id , amount ) VALUES ( ? , ? , ? )");

$stmt->bindParam(1, $user_id);
$stmt->bindParam(2, $product_id);
$stmt->bindParam(3, $amount);


if ($stmt->execute()) {
    header("Location: ../cart.php");
} else {
    $error_msg = "Error: " . $stmt->errorInfo()[2];
    header("Location: ../shop.php?error=$error_msg");
}
