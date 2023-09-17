<?php
// Kết nối đến cơ sở dữ liệu
require_once "../config.php";

// Xử lý yêu cầu POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userName = $_POST["UserName"];
    $password = $_POST["Pass"];
    $machineid = $_POST["Machine_Id"];

    // Truy vấn để kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM user_autotools WHERE UserName = '$userName' AND Pass = '$password' AND Machine_Id = '$machineid' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user["status"] == 0 || empty($user["status"])) {
            $response = array("message" => "not_activated");
        } else if ($user["status"] == 2) {
            $response = array("message" => "pending");
        } else {
            $response = array("message" => "success");
        }
    } else {
        $response = array("message" => "failure");
    }

    // Chuyển mảng thành chuỗi JSON và trả về
    echo json_encode($response);
}

// Đóng kết nối
$conn->close();
?>
