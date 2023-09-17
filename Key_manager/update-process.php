<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["phone"])) {
    $phone = $_POST["phone"];
    $UserName = $_POST["UserName"];
    $Pass = $_POST["Pass"];
    $Machine_Id = $_POST["Machine_Id"];
    $status = $_POST["status"];
    $api_google = $_POST["api_google"];
    $expired = $_POST["expired"];

    // Câu truy vấn để cập nhật dữ liệu
    $query = "UPDATE user_autotools SET UserName = '$UserName', Pass = '$Pass', Machine_Id = '$Machine_Id', status = '$status', api_google = '$api_google' , expired = '$expired' WHERE phone = '$phone'";
    
    if ($conn->query($query) === TRUE) {
        echo "<script>
        alert('Cập nhật thành công!');
        window.location.href = 'dashboard.php';
    </script>";
    } else {
        echo "Lỗi cập nhật: " . $conn->error;
    }
}

$conn->close();
?>
