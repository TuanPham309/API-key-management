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
                        <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/avatar/ledung.png" alt="" width="40" /><span class="text-sans-serif">Quản Lý Key</span>
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
                                    <!-- ádasdsadasdasdasdasdasd -->

                         

                            <li class="nav-item"><a class="nav-link" href="/actions/quanlytaikhoan.php">
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
                                    <a class="dropdown-item" href="logout.php">Logout</a>
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
            <h6>Tổng số key<span class="badge badge-soft-info rounded-capsule ml-2">Toàn bộ</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" data-countup='{"count":50,"format":"comma","prefix":""}'>50</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Xem toàn bộ<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(/assets/img/illustrations/corner-2.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Số key đang hoạt động<span class="badge badge-soft-success rounded-capsule ml-2">Cho phép</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info" data-countup='{"count":25,"format":"comma","prefix":""}'>25</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Xem toàn bộ<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(/assets/img/illustrations/corner-3.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Số key đang tạm dừng<span class="badge badge-soft-danger rounded-capsule ml-2">Đã khóa</span></h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup='{"count":25,"format":"comma","prefix":""}'>25</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Xem toàn bộ<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Danh sách key gần đây</h5>
                <a class="dropdown-item" href="version_update.php">Update Version</a>
            </div>
            <a class="dropdown-item" href="frm-version.php">Show Version</a>
            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                <div class="d-none" id="purchases-actions">
                    <div class="input-group input-group-sm">
                        <select class="custom-select cus" aria-label="Bulk actions">
                            <option selected="">Hành động</option>
                            <option value="Refund">Hoàn tiền</option>
                            <option value="Delete">Xóa</option>
                            <option value="Archive">Lưu trữ</option>
                        </select>
                        <button class="btn btn-falcon-default btn-sm ml-2" type="button">Áp dụng</button>
                        
                    </div>
                </div>
                <div id="dashboard-actions">
                <a href="frm-version.php"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Hiển thị phiên bản</span></button></a>
                <a href="version_update.php"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Thêm Version</span></button></a>
                

                    <a href="addkey.php"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Thêm key</span></button></a>
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Bộ lọc</span></button>
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Xuất danh sách</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="dashboard-data-table">
            <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":true,"searching":true,"pageLength":10,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> Xem toàn bộ <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="no-sort pr-1 align-middle data-table-row-bulk-select">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" />
                                <label class="custom-control-label" for="checkbox-bulk-purchases-select"></label>
                            </div>
                        </th>
                        <th class="sort pr-1 align-middle">Username</th>
                        <th class="sort pr-1 align-middle">Pass</th>
                        <th class="sort pr-1 align-middle">Mã máy</th>
                        <th class="sort pr-1 align-middle text-center">Trạng thái</th>
                        <th class="sort pr-1 align-middle text-center">Ngày hết hạn</th>
                        <th class="sort pr-1 align-middle text-center">Api GG</th>
                        <th class="sort pr-1 align-middle text-center">FPT.AI</th>
                        <th class="sort pr-1 align-middle text-center">Google TSS</th>
                        <th class="sort pr-1 align-middle text-center">TTS Free</th>
                        <th class="sort pr-1 align-middle text-center">Voice Maker</th>
                       
                        <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                    </tr>
                </thead>
                <tbody id="purchases">
                    <?php
                   require_once "config.php";
                    // Truy vấn để lấy thông tin tất cả người dùng
                    $query = "SELECT * FROM user_autotools";
                    $result = $conn->query($query);
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr class="btn-reveal-trigger">';
                            echo '<td class="align-middle">';
                            echo '<div class="custom-control custom-checkbox">';
                            echo '<input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-' . $row["phone"] . '" />';
                            echo '<label class="custom-control-label" for="checkbox-' . $row["phone"] . '"></label>';
                            echo '</div>';
                            echo '</td>';
                            echo '<th class="align-middle"><a href="pages/customer-details.html">' . $row["UserName"] . '</a></th>';
                            echo '<td class="align-middle">' . $row["Pass"] . '</td>';
                            echo '<td class="align-middle">' . $row["Machine_Id"] . '</td>';

                            echo '<td class="align-middle text-center fs-0">';
                            if ($row["status"] == 1) {
                                echo '<span class="badge badge rounded-capsule badge-soft-success">Đang kích hoạt<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>';
                            } elseif ($row["status"] == 2) {
                                echo '<span class="badge badge rounded-capsule badge-soft-warning">Chờ duyệt<span class="ml-1 fas fa-exclamation-triangle" data-fa-transform="shrink-2"></span></span>';
                            } else {
                                echo '<span class="badge badge rounded-capsule badge-soft-danger">Đã khóa<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>';
                            }
                            echo '</td>';

                               echo '<td class="align-middle text-center">' . $row["expired"] . '</td>';
                               echo '<td class="align-middle text-center">' . $row["api_google"] . '</td>';
                               echo '<td class="align-middle text-center">' . $row["fpt"] . '</td>';
                               echo '<td class="align-middle text-center">' . $row["gg"] . '</td>';
                               
                               echo '<td class="align-middle text-center">' . $row["ttsfree"] . '</td>';
                               echo '<td class="align-middle text-center">' . $row["voicemaker"] . '</td>';
                            echo '<td class="align-middle white-space-nowrap">';
                            echo '<div class="dropdown text-sans-serif">';
                            echo '<button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown-' . $row["phone"] . '" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>';
                            echo '<div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-' . $row["phone"] . '">';
                            echo '<div class="bg-white py-2">';
                            echo '<a class="dropdown-item" href="#!">Xem chi tiết</a>';
                            echo '<a class="dropdown-item" href="update.php?phone=' . $row["phone"] . '">Sửa</a>';

                            echo '<div class="dropdown-divider"></div>';
                            echo '<a class="dropdown-item text-danger" href="javascript:deleteKey(\'' . $row["phone"] . '\')">Xóa</a>';

                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="7">Không có dữ liệu người dùng.</td></tr>';
                    }
                    ?>
                    
                </tbody>
            </table>
            
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

<script>
function deleteKey(phone) {
    if (confirm("Bạn có chắc chắn muốn xóa người dùng này?")) {
        $.ajax({
            type: "POST",
            url: "delete-user.php",
            data: { phone: phone },
            success: function(response) {
                if (response === "success") {
                    // Reload trang hoặc cập nhật lại bảng người dùng nếu cần
                    location.reload();
                } else {
                    alert("Xóa người dùng thất bại.");
                }
            },
            error: function() {
                alert("Đã xảy ra lỗi trong quá trình gửi yêu cầu.");
            }
        });
    }
}
</script>


</body>

</html>