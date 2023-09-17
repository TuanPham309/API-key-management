<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["insertInfo"])) {
    $phone = $_POST["phone"];
    $UserName = $_POST["UserName"];
    $Pass = $_POST["Pass"];
    $Machine_Id = $_POST["Machine_Id"];
    $status = $_POST["status"];
    $api_google = $_POST["api_google"];
    $expired = $_POST["expired"];

    $insert_query = "INSERT INTO user_autotools (phone, UserName, Pass, Machine_Id, status, api_google, expired) 
                     VALUES ('$phone', '$UserName', '$Pass', '$Machine_Id', '$status', '$api_google', '$expired')";
    
    if ($conn->query($insert_query) === TRUE) {
        echo "<script>
        alert('Thêm User thành công!');
        window.location.href = 'dashboard.php';
    </script>";
    } else {
        echo "error";
    }
}

$conn->close();
?>
