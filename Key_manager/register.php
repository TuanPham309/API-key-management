<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Trang đăng Ký</title>
</head>
<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost"; // Thay đổi nếu cần thiết
$username = "root"; // Thay đổi nếu cần thiết
$password = ""; // Thay đổi nếu cần thiết
$dbname = "keyserver"; // Thay đổi nếu cần thiết

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý dữ liệu đăng ký
if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Truy vấn để kiểm tra xem username hoặc email đã tồn tại chưa
    $checkQuery = "SELECT * FROM login WHERE username='$username' OR email='$email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        // Người dùng đã tồn tại
        echo "<script>
                  alert('Tài khoản hoặc email đã tồn tại!');
                  window.history.back();
              </script>";
    } else {
        // Thêm thông tin người dùng vào cơ sở dữ liệu
        $insertQuery = "INSERT INTO login (fullname, username, password, email, phone) VALUES ('$fullname', '$username', '$password', '$email', '$phone')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>
                      alert('Đăng ký thành công!');
                      window.location.href = 'dangnhap.php';
                  </script>";
        } else {
            echo "<script>
                      alert('Không thể đăng ký: " . $conn->error . "');
                      window.history.back();
                  </script>";
        }
    }
}

// Đóng kết nối
$conn->close();
?>


<body>
    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center vh-100">
            <div class="mb-2 d-flex flex-column justify-content-center align-items-center">
                <img src="assets/img/login.png" alt="login" class="img-fluid">
            </div>
            <div class="dialog p-4 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3">
                <form method="POST" enctype="multipart/form-data" action="register.php">
                    <h5 class="text-white mb-3">Đăng Ký</h5>
                    <div class="mb-3">
                        <input type="text" name="fullname" id="fullname" class="form-control text-white border-0 input-text" placeholder="Nhập họ và tên..." autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="username" id="username" class="form-control text-white border-0 input-text" placeholder="Nhập tên đăng ký..." autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="form-control text-white border-0 input-text" placeholder="Nhập mật khẩu đăng ký..." autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control text-white border-0 input-text" placeholder="Nhập email đăng ký..." autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" id="phone" class="form-control text-white border-0 input-text" placeholder="Nhập số điện thoại đăng ký..." autocomplete="off">
                    </div>
                    <div class="mt-4 mb-3">
                        <button type="submit" class="btn btn-primary w-100" name="register">Đăng ký</button>
                    </div>
                    <a class="nav-link" href="dangnhap.php">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-key"></span></span><span class="nav-link-text"> Đăng Nhập</span>
                                    </div>
                                </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>