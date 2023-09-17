<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    
    // Thực hiện xóa người dùng dựa trên số điện thoại
    $query = "DELETE FROM update_version WHERE id = '$id'";
    if ($conn->query($query) === TRUE) {
        echo "<script>
        alert('Xóa thành công!');
        window.location.href = 'dashboard.php';
    </script>";
    } else {
        echo "error";
    }
}

$conn->close();
?>
