<?php
require_once "config.php";

// Xử lý dữ liệu đăng nhập
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sử dụng truy vấn tham số hoá để bảo vệ khỏi SQL Injection
    $query = "SELECT * FROM user WHERE UserName=? AND Pass=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Người dùng tồn tại, có thể đăng nhập thành công
            session_start();
            $_SESSION['username'] = $username; // Lưu thông tin phiên đăng nhập
            header("Location: dashboard.php"); // Chuyển hướng đến trang dashboard
            exit();
        } else {
            // Sai tên đăng nhập hoặc mật khẩu
            echo "<script>
                  alert('Sai tên đăng nhập hoặc mật khẩu!');
                  window.history.back();
              </script>";
        }
    } else {
        // Xảy ra lỗi trong quá trình thực hiện truy vấn
        echo "Lỗi truy vấn: " . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>
