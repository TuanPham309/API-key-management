


<!DOCTYPE html>
<html lang="vi-VN" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Auto Voices</title>

    <style>
  #notification {
    color: #f5803e; /* Màu văn bản */
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    white-space: nowrap;
    overflow: hidden;
  }
</style>

<script>
  var messages = [
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn NguyenLinhQQ đã mua tools ",
    "Thông báo: Cảm ơn TuanZuka đã mua tools",
    "Thông báo: Cảm ơn AnhDepTrai đã mua tools",
    "Thông báo: Cảm ơn NgọcKhoan đã mua tools",
    "Thông báo: Cảm ơn Thái Dũng đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn Sonnngoku đã mua tools",
    "Thông báo: Cảm ơn Thái Bảo  đã mua tools",
    "Thông báo: Cảm ơn Chiến Thần đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn Tạc Thiên Bang đã mua tools",
    "Thông báo: Cảm ơn Ông Hoàng Gạ Ch*ch đã mua tools",
    "Thông báo: Cảm ơn Huỳnh Đức Tiến đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn Thanh hải đã mua tools",
    "Thông báo: Cảm ơn Yusep đã mua tools",
    "Thông báo: Cảm ơn Hoàng Bảo đã mua tools",
    "Thông báo: Cảm ơn Phương Trần đã mua tools",
    "Thông báo: Cảm ơn Bobo đã mua tools",
    "Thông báo: Cảm ơn Thương đã mua tools",
    "Thông báo: Cảm ơn Ông Dám đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn Mmd Vn đã mua tools",
    "Thông báo: Cảm ơn Dũng đã mua tools",
    "Thông báo: Cảm ơn poison đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn Phạm Lợi đã mua tools",
    "Thông báo: Cảm ơn Sói già đã mua tools",
    "Thông báo: Cảm ơn Mai Nguyễn đã mua tools",
    "Thông báo: Cảm ơn Châu đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    "Thông báo: Cảm ơn Dũng Thúy Quỳnh đã mua tools",
    "Thông báo: Cảm ơn Hữu Sơn đã mua tools",
    "Thông báo: Cảm ơn Tuấn Anh đã mua tools",
    "Thông báo: Cảm ơn Vân Vũ đã mua tools",
    "Thông báo: Cảm ơn Linh Donald đã mua tools",
    "Thông báo: Cảm ơn Xe kHông Cần Đạp đã mua tools",
    "Thông báo: Cảm ơn Dasdragon đã mua tools",
    "Thông báo: Cảm ơn ** ẩn danh ** đã mua tools",
    // ...Thêm thông báo khác nếu cần
  ];

  var currentIndex = 0;

  function displayNextMessage() {
    if (currentIndex < messages.length) {
      var message = messages[currentIndex];
      showMessage(message);
      currentIndex = (currentIndex + 1) % messages.length;
    }
  }

  function showMessage(message) {
    var notification = document.getElementById("notification");
    notification.innerHTML = message;
    notification.style.left = "100%"; // Bắt đầu từ vị trí ngoài cùng bên phải

    setTimeout(function() {
      animateMessage();
    }, 100); // Chờ 0.1 giây trước khi bắt đầu hiệu ứng chuyển động
  }

  function animateMessage() {
    var notification = document.getElementById("notification");
    notification.style.transition = "left 15s linear";
    notification.style.left = "-100%"; // Di chuyển sang bên trái

    setTimeout(function() {
      notification.style.transition = "none";
      notification.style.left = "100%"; // Đặt lại vị trí ngoài cùng bên phải
      displayNextMessage();
    }, 15000); // 3 giây sau khi hiệu ứng chuyển động kết thúc
  }

  window.onload = function() {
    displayNextMessage();
  };
</script>

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



                    </div><a class="navbar-brand" href="index.php">
                        <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/avatar/ledung.png" alt="" width="30" /><span class="text-sans-serif">AutoVoices</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content perfect-scrollbar scrollbar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="index.php">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text"> Trang chủ</span>
                                    </div>
                                </a>
                            </li>
                            
                                    <!-- ádasdsadasdasdasdasdasd -->

                         

                           
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand">
                
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="index.php">
                        <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/avatar/ledung.png" alt="" width="40" /><span class="text-sans-serif">Mua Auto Voices | Tools Review Phim </span>
                        </div>
                    </a>

                
                    <div id="notification"></div>



                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/avatar/ledung.png" alt="" />

                                </div>
                            </a>
                           

                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-soft py-2">
                                    <a class="dropdown-item font-weight-bold text-warning"><span class="fas fa-crown mr-1"></span><span>User</span></a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/actions/thongtintaikhoan.php">Thông tin tài khoản</a>
                                    <a class="dropdown-item" href="/actions/quanlytaikhoan.php">Quản lý tài khoản</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="dangnhap.php">Logout</a>
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
<div class="card-deck">
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(/assets/img/illustrations/corner-1.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Lượt Mua Tools AutoVoice<span class="badge badge-soft-info rounded-capsule ml-2">Toàn bộ</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" data-countup='{"count":73,"format":"comma","prefix":""}'>73</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="index.php"><span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(/assets/img/illustrations/corner-2.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Lượt Mua Đã Kích Hoạt Vĩnh Viễn<span class="badge badge-soft-success rounded-capsule ml-2">Cho phép</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info" data-countup='{"count":56,"format":"comma","prefix":""}'>56</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="index.php"><span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(/assets/img/illustrations/corner-3.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Số key đang tạm dừng<span class="badge badge-soft-danger rounded-capsule ml-2">Đã khóa</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup='{"count":17,"format":"comma","prefix":""}'>17</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="index.php"><span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Danh sách lượt mua</h5>
              
            </div>
          
            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
               
                <div id="dashboard-actions">
              

                    
                    <a href="buyapi.php"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-shopping-cart" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Mua Api Giọng Đọc</span></button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="dashboard-data-table">
            <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":true,"searching":true,"pageLength":10,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"index.php\" class=\"font-weight-semi-bold\">  <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="no-sort pr-1 align-middle data-table-row-bulk-select">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" />
                                <label class="custom-control-label" for="checkbox-bulk-purchases-select"></label>
                            </div>
                        </th>
                        <th class="sort pr-1 align-middle"> Tháng </th>
                        <th class="sort pr-1 align-middle">Ngân Hàng</th>
                        <th class="sort pr-1 align-middle">Số Tài Khoản</th>
                        <th class="sort pr-1 align-middle">Chủ Tài khoản </th>
                        <th class="sort pr-1 align-middle">Giá Tiền </th>
                        <th class="sort pr-1 align-middle">Trạng Thái </th>
                       
                        <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                    </tr>
                </thead>
                <tbody id="purchases">
        <tr class="btn-reveal-trigger">
            <td class="align-middle">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-123456" />
                    <label class="custom-control-label" for="checkbox-123456"></label>
                </div>
            </td>
            <td class="align-middle">1</td>
           
            <td class="align-middle">MB Bank</td>
            <td class="align-middle">0865814259</td>
            <td class="align-middle">Phạm Văn Tuấn </td>
            <td class="align-middle">350,000VNĐ</td>
            <td class="align-middle text-center fs-0">
                <span class="badge badge rounded-capsule badge-soft-danger">15 Lượt Mua<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
        </tr>
        <tr class="btn-reveal-trigger">
            <td class="align-middle">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-123456" />
                    <label class="custom-control-label" for="checkbox-123456"></label>
                </div>
            </td>
            <td class="align-middle">3</td>
           
            <td class="align-middle">MB Bank</td>
            <td class="align-middle">0865814259</td>
            <td class="align-middle">Phạm Văn Tuấn </td>
            <td class="align-middle">850,000VNĐ</td>
            <td class="align-middle text-center fs-0">
                <span class="badge badge rounded-capsule badge-soft-warning">29 Lượt Mua<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
        </tr>
        <tr class="btn-reveal-trigger">
            <td class="align-middle">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-123456" />
                    <label class="custom-control-label" for="checkbox-123456"></label>
                </div>
            </td>
            <td class="align-middle">6</td>
          
            <td class="align-middle">MB Bank</td>
            <td class="align-middle">0865814259</td>
            <td class="align-middle">Phạm Văn Tuấn </td>
            <td class="align-middle">1,150,000VNĐ</td>
            <td class="align-middle text-center fs-0">
                <span class="badge badge rounded-capsule badge-soft-success">6 Lượt Mua<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
        </tr>
        <tr class="btn-reveal-trigger">
            <td class="align-middle">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-123456" />
                    <label class="custom-control-label" for="checkbox-123456"></label>
                </div>
            </td>
            <td class="align-middle">Vĩnh Viễn</td>
          
            <td class="align-middle">MB Bank</td>
            <td class="align-middle">0865814259</td>
            <td class="align-middle">Phạm Văn Tuấn </td>
            <td class="align-middle">2,450,000VNĐ</td>
            <td class="align-middle text-center fs-0">
                <span class="badge badge rounded-capsule badge-soft-success">33 Lượt Mua<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
        </tr>
        <tr class="btn-reveal-trigger">
            <td class="align-middle"  colspan="12">Nội Dung Thanh Toán: Tên Tài Khoản Đăng ký  + Số điện thoại đăng ký zalo + tháng + mua tools review phim </td>
      
    </tbody>
            </table>
            <h2 class="badge badge-soft-info rounded-capsule ml-2" > Nội Dung Thanh Toán: Tên Tài Khoản Đăng ký  + Số điện thoại đăng ký zalo + tháng + mua tools review phim . | Bạn sẽ nhận được đường link tools trong Email !! Cảm ơn</h2>
            <a class="fs-0 mb-0 text-nowrap py-2 py-xl-0" >Nếu chưa thấy kích hoạt liên hệ admin qua:</a>
       
            <a href="https://zalo.me/0384464245"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-shopping-cart" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Zalo:0384464245</span></button></a>
             
            </div>
    </div>
</div>
<footer>
    <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">Copyright Tuấn Phạm - Cò review Phim <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy;</p>
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