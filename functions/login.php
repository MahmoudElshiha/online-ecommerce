<?php

session_start();

include "./db_conn.php";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$stmt = $conn->prepare("select * from users where username = '$username' and password = '$password'");
// $stmt = $conn->prepare("select * from users where username = '$username' and password = '$password'");
$stmt->execute();
if ($stmt->rowCount() === 1) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($user);
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    if ($user['is_admin'] == 1) {
        $_SESSION['admin'] = 1;
    }
    header("Location: ../home.php");
} else {
    header("Location: ../user_login.php?error=1");
}
