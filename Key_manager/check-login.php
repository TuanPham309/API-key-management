<?php
session_start();
$checkQuery = "SELECT * FROM user WHERE UserName = '$UserName'";
$checkResult = $conn->query($checkQuery);

if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}
?>
