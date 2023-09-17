<?php
// Kết nối đến cơ sở dữ liệu
require_once "../config.php";
// Xử lý yêu cầu GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $userphone = $_GET["phone"];

    // Truy vấn để lấy thông tin api_google theo user_phone
    $query = "SELECT ttsfree FROM user_autotools WHERE phone = '$userphone'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $apiGoogle = $row["ttsfree"];
        
        // Tạo một mảng kết quả
        $response = array("app" => $apiGoogle);
        
        // Chuyển mảng thành chuỗi JSON và trả về
        echo json_encode($response);
    } else {
        // Trả về thông báo không tìm thấy thông tin dưới dạng JSON
        $response = array("message" => "Không tìm thấy thông tin.");
        echo json_encode($response);
    }
}


// Đóng kết nối
$conn->close();
?>
