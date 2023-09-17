<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $version = $_POST["version"];
    $created_at = $_POST["created_at"];
    $file_name = $_POST["file_name"];
    $file_path = $_POST["file_path"];
    $update_message = $_POST["update_message"];
    $expired = $_POST["expired"];

    // Câu truy vấn để cập nhật dữ liệu
    $query = "UPDATE update_version SET version = '$version', created_at = '$created_at', file_name = '$file_name', file_path = '$file_path', update_message = '$update_message'  WHERE id = '$id'";
    
    if ($conn->query($query) === TRUE) {
        echo "<script>
        alert('Cập nhật phiên bản thành công!');
        window.location.href = 'dashboard.php';
    </script>";
    } else {
        echo "Lỗi cập nhật: " . $conn->error;
    }
}

$conn->close();
?>
