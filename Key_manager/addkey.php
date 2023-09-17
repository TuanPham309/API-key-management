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
    $fpt = $_POST["fpt"];             // Thêm dữ liệu cho cột fpt
    $gg = $_POST["gg"];               // Thêm dữ liệu cho cột gg
    $ttsfree = $_POST["ttsfree"];     // Thêm dữ liệu cho cột ttsfree
    $voicemaker = $_POST["voicemaker"]; // Thêm dữ liệu cho cột voicemaker
       // Thêm dữ liệu cho cột trans

    $insert_query = "INSERT INTO user_autotools (phone, UserName, Pass, Machine_Id, status, api_google, expired, fpt, gg, ttsfree, voicemaker) 
                     VALUES ('$phone', '$UserName', '$Pass', '$Machine_Id', '$status', '$api_google', '$expired', '$fpt', '$gg', '$ttsfree', '$voicemaker')";
    
    if ($conn->query($insert_query) === TRUE) {
        echo "<script>
        alert('Thêm thành công!');
        window.location.href = 'dashboard.php';
    </script>";
    } else {
        echo "error";
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="vi-VN" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Server quản lý key</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">
    <link href="assets/css/theme-dark.css" rel="stylesheet">
    <!-- Flatpikr -->
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/flatpickr@4.6.9/dist/l10n/vn.js"></script>
    <!-- Flatpikr -->

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


        <div class="container" data-layout="container">
            <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">

                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

                    </div><a class="navbar-brand" href="/">
                        <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/avatar/ledung.png" alt="" width="40" /><span class="text-sans-serif">KeyPRO</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content perfect-scrollbar scrollbar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="dashboard.php">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text"> Trang chủ</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="addkey.php">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-key"></span></span><span class="nav-link-text"> Thêm key</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="quanlytaikhoan.php">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text"> Quản lý tài khoản</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand">

                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/avatar/ledung.png" alt="" width="40" /><span class="text-sans-serif">Quản lý key</span>
                        </div>
                    </a>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/avatar/ledung.png" alt="" />

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-soft py-2">
                                    <a class="dropdown-item font-weight-bold text-warning"><span class="fas fa-crown mr-1"></span><span>ADMIN</span></a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/actions/thongtintaikhoan.php">Thông tin tài khoản</a>
                                    <a class="dropdown-item" href="/actions/quanlytaikhoan.php">Quản lý tài khoản</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/auth/logout.php">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="card bg-light mb-3">
                    <div class="card-body p-3">
                        <p class="fs--1 mb-0">
                            <span class="fab fa-gratipay" data-fa-transform="rotate-90"></span>
                        </p>
                    </div>
                </div>

                <!-- Hết header -->
<div class="row g-0">
    <div class="col-lg-12">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Thêm key mới vào cơ sở dữ liệu</h5>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <p class="mb-0">
                <div class="alert alert-info" role="alert"><i class="fa fa-bell"></i> Vui lòng nhập các thông tin một cách chính xác!
                </div>
                <br>
                <form action="addkey.php" method="POST" accept-charset="utf-8" class="user">

                <div class="mb-3">
                <label for="phone">Phone:</label>
                    <input type="text"  class="form-control" name="phone" value="">
                </div>
                    <div class="mb-3">
                        <label for="UserName">UserName:</label>
                        <input type="text" class="form-control" name="UserName" id="UserName" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="Pass">Password:</label>
                        <input type="text" class="form-control" name="Pass" id="Pass" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="Machine_Id">Mã máy:</label>
                        <input type="text" class="form-control" name="Machine_Id" id="Machine_Id"  placeholder="Nhập mã máy hoặc định danh" required>
                    </div>
                    <div class="mb-3">
                        <label for="api_google">Api Google:</label>
                        <input type="text" class="form-control" name="api_google" id="api_google"  placeholder="Nhập api gg" required>
                    </div>
                    <div class="mb-3">
                        <label for="gg"> Google TTS:</label>
                        <input type="text" class="form-control" name="gg" id="gg"  placeholder="Nhập api google text to speech" value= "https://texttospeech.googleapis.com/v1/text" required>
                    </div>


                    <div class="mb-3">
                        <label for="fpt">FPT.AI:</label>
                        <input type="text" class="form-control" name="fpt" id="fpt"  value="https://api.fpt.ai/hmi/tts/v5" required>
                    </div>
                    <div class="mb-3">
                        <label for="ttsfree">TTS Free :</label>
                        <input type="text" class="form-control" name="ttsfree" id="ttsfree"  value="https://ttsfree.com/api/v1/tts" required>
                    </div>
                    <div class="mb-3">
                        <label for="voicemaker">Voice Maker :</label>
                        <input type="text" class="form-control" name="voicemaker" id="voicemaker"  value="https://developer.voicemaker.in/voice/api" required>
                    </div>



                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái:</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Cho phép hoạt động</option>
                            <option value="0">Khóa</option>
                            <option value="2">Chưa duyệt</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="expired">Ngày hết hạn:</label>
                        <input type="datetime-local" name="expired" value=""  required />

                        <!-- <input type="Date" class="form-control" name="expired" id="expired" value="" required /> -->
                    </div>
            
                    <button id="success-message" type="submit" class="btn btn-primary btn-rounded btn-block" name="insertInfo"><i class="fas fa-save"></i> Thêm </button>
                </form>
                </p>
            </div>
        </div>
    </div>

</div>

<footer>
    <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">Copyright Tuan Pham - cò Review Phim <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy;</p>
        </div>
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">Phiên bản v1.0</p>
        </div>
    </div>
</footer>
</div>
</div>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->



<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/lib/@fortawesome/all.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<script src="assets/lib/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
<script src="assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
<script src="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
<script src="assets/js/theme.js"></script>



</body>

</html>