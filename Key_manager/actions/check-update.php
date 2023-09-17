<?php
// Kết nối đến cơ sở dữ liệu
require_once "../config.php";

// Truy vấn để lấy thông tin về phiên bản mới nhất
$query = "SELECT version, update_message, file_name, file_path
          FROM update_version
          ORDER BY id DESC
          LIMIT 1";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response = array(
        "version" => $row["version"],
        "update_message" => $row["update_message"],
        "file_name" => $row["file_name"],
        "file_path" => $row["file_path"]
    );
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo "Không tìm thấy thông tin phiên bản mới.";
}

// Đóng kết nối
$conn->close();
?>
