<?php
// Kết nối đến cơ sở dữ liệu
require_once "../config.php";

// Xử lý yêu cầu POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $phone = $_POST["phone"];
    $userName = $_POST["UserName"];
    $pass = $_POST["Pass"];
    $machineId = $_POST["Machine_Id"];
 
 // Truy vấn để kiểm tra sự tồn tại của số điện thoại hoặc tên người dùng
    $checkQuery = "SELECT * FROM user_autotools WHERE phone = '$phone' OR UserName = '$userName'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        $response = array("message" => "not create user");
    } else {
        $query = "INSERT INTO user_autotools (phone, UserName, Pass, Machine_Id)
                  VALUES ('$phone', '$userName', '$pass', '$machineId')";
    
        if ($conn->query($query) === TRUE) {
            $response = array("message" => "success");
        } else {
            $response = array("error" => "Lỗi: " . $conn->error);
        }
    }
    
    // Lấy dữ liệu JSON từ yêu cầu POST (assumed JSON input)
    $inputData = json_decode(file_get_contents('php://input'), true);
    
    // Kiểm tra nếu dữ liệu JSON truyền vào hợp lệ
    if ($inputData !== null) {
        // Gộp dữ liệu JSON mới vào dữ liệu phản hồi
        $response = array_merge($response, $inputData);
    }
    
    // Chuyển mảng thành chuỗi JSON và trả về
    echo json_encode($response);
}    

// Đóng kết nối
$conn->close();
?>
