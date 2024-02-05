<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/admin/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="../assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/admin/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/admin/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/admin/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="../assets/admin/css/app.css" rel="stylesheet">
    <link href="../assets/admin/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/admin/css/dark-theme.css" />
    <link rel="stylesheet" href="../assets/admin/css/semi-dark.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/admin/css/header-colors.css" />
    <title>Aurora Coffee - Admin Dashboard</title>
</head>

<body
    style="background-image: url('../assets/admin/images/avatars/3.png'); width: 100%; height: 100vh; background-size: 100% 100%; overflow-x: hidden; background-repeat: no-repeat; overflow-x: hidden;">
    <!--wrapper-->
    <div class="header-wrapper ">
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="topbar-logo-header">
                        <div class="px-5 mx-4">
                            <a href="./indexAdmin">
                                <img src="../assets/admin/images/avatars/Aurora_Coffee.png" style="scale: 6;"
                                class="logo-icon" alt="logo icon">
                            </a>
                        </div>

                    </div>
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                    <div class="top-menu ms-auto">
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/admin/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Minh Tuan Le</p>
                                <p class="designattion mb-0">Manager</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" onclick="logout()"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--navigation-->
        <div class="nav-container primary-menu">
            <div class="mobile-topbar-header">
                <div>
                    <img src="../assets/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Rukada</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <nav class="navbar navbar-expand-xl w-100">
                <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                    <li class="nav-item" >
                        <a class="nav-link" href="/indexAdmin" >
                            <div class="parent-icon"><i class="fa-solid fa-house"></i>
                            </div>
                            <div class="menu-title">Trang Chủ</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pagesAdmin/ord">
                            <div class="parent-icon"><i class="fa-solid fa-mug-saucer"></i>
                            </div>
                            <div class="menu-title">Đặt Món</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pagesAdmin/ban">
                            <div class="parent-icon"><i class="fa-solid fa-couch"></i>
                            </div>
                            <div class="menu-title">Quản Lý Bàn</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pagesAdmin/donhang">
                            <div class="parent-icon"><i class="fa-solid fa-couch"></i>
                            </div>
                            <div class="menu-title">Đơn Hàng</div>
                        </a>
                    </li>
                    <li class="nav-item" style="background-color: #AB826B;">
                        <a class="nav-link " href="/pagesAdmin/quanlykhachhang" style="color:white">
                            <div class="parent-icon"><i class="fa-solid fa-couch"></i>
                            </div>
                            <div class="menu-title">Quản Lý Khách Hàng</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pagesAdmin/diem-danh">
                            <div class="parent-icon"><i class="fa-solid fa-business-time"></i>
                            </div>
                            <div class="menu-title">Chấm Công Nhân Viên</div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="fa-solid fa-bars-progress"></i>
                            </div>
                            <div class="menu-title">Quản Lý Cafe</div>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="/pagesAdmin/kho" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Kho</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/mon" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Món</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/vattu"
                                    target="_blank"><i class="bx bx-right-arrow-alt"></i>Vật Tư</a>
                            </li>

                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="fa-solid fa-person"></i>
                            </div>
                            <div class="menu-title">Quản Lý Nhân Viên</div>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="/pagesAdmin/nhanvien"
                                    target="_blank"><i class="bx bx-right-arrow-alt"></i>Nhân viên</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/phanquyen"
                                    target="_blank"><i class="bx bx-right-arrow-alt"></i>Phân Quyền</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/quanlyluong"
                                    target="_blank"><i class="bx bx-right-arrow-alt"></i>Quản Lý Lương</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/quanlyluong"
                                    target="_blank"><i class="bx bx-right-arrow-alt"></i>Thưởng/Phạt</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="row mt-4">

                <div class="card mt-3">

                    <div class="mt-3">

                        <h4><b>Quản Lý Khách Hàng</b></h4>

                    </div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-lg-flex align-items-center mb-4 gap-3">
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Khách</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày Tạo Tài Khoản </th>
                                                <th>Email</th>
                                                <th>Lịch sử Đơn Hàng</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <input class="form-check-input me-3" type="checkbox"
                                                                value="" aria-label="...">
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 font-14">1</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Lê Minh Tuấn</td>
                                                <td>32 Xuân Diệu</td>
                                                <td>12 Tháng 12, 2023</td>
                                                <td>minhtuanledng@gmail.com</td>
                                                <td><button type="button"
                                                        class="btn btn-primary btn-sm radius-30 px-4">Xem</button>


                                                </td>
                                                <td>

                                                    <div class="d-flex order-actions">
                                                        <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
                                                        <a href="javascript:;" class="ms-3"><i
                                                                class="bx bxs-trash"></i></a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <input class="form-check-input me-3" type="checkbox"
                                                                value="" aria-label="...">
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 font-14">1</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Lê Minh Tuấn</td>
                                                <td>32 Xuân Diệu</td>
                                                <td>12 Tháng 12, 2023</td>
                                                <td>minhtuanledng@gmail.com</td>
                                                <td><button type="button"
                                                        class="btn btn-primary btn-sm radius-30 px-4">Xem</button>


                                                </td>
                                                <td>

                                                    <div class="d-flex order-actions">
                                                        <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
                                                        <a href="javascript:;" class="ms-3"><i
                                                                class="bx bxs-trash"></i></a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <input class="form-check-input me-3" type="checkbox"
                                                                value="" aria-label="...">
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 font-14">1</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Lê Minh Tuấn</td>
                                                <td>32 Xuân Diệu</td>
                                                <td>12 Tháng 12, 2023</td>
                                                <td>minhtuanledng@gmail.com</td>
                                                <td><button type="button"
                                                        class="btn btn-primary btn-sm radius-30 px-4">Xem</button>


                                                </td>
                                                <td>

                                                    <div class="d-flex order-actions">
                                                        <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
                                                        <a href="javascript:;" class="ms-3"><i
                                                                class="bx bxs-trash"></i></a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <input class="form-check-input me-3" type="checkbox"
                                                                value="" aria-label="...">
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-0 font-14">1</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Lê Minh Tuấn</td>
                                                <td>32 Xuân Diệu</td>
                                                <td>12 Tháng 12, 2023</td>
                                                <td>minhtuanledng@gmail.com</td>
                                                <td><button type="button"
                                                        class="btn btn-primary btn-sm radius-30 px-4">Xem</button>


                                                </td>
                                                <td>

                                                    <div class="d-flex order-actions">
                                                        <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
                                                        <a href="javascript:;" class="ms-3"><i
                                                                class="bx bxs-trash"></i></a>
                                                    </div>
                                                </td>

                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>



            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="../assets/admin/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../assets/admin/js/jquery.min.js"></script>
    <script src="../assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/admin/plugins/chartjs/js/Chart.min.js"></script>
    <script src="../assets/admin/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="../assets/admin/js/index.js"></script>
    <!--app JS-->
    <script src="../assets/admin/js/app.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const x = localStorage.getItem("login")
            if (!x) {
                return window.location.href = "/pagesAdmin/login"
            }
        });

        function logout() {
            localStorage.removeItem('login')
            return window.location.href = "/pagesAdmin/login"
        }
    </script>
</body>

</html>
