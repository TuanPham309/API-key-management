<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["phone"])) {
    $phone = $_POST["phone"];
    
    // Thực hiện xóa người dùng dựa trên số điện thoại
    $query = "DELETE FROM user_autotools WHERE phone = '$phone'";
    if ($conn->query($query) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}

$conn->close();
?>
