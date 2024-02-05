<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../../assets/admin/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="../../assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <link href="../../assets/admin/plugins/fullcalendar/css/main.min.css" rel="stylesheet">
    <link href="../../assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <!-- loader-->
    <link href="../../assets/admin/css/pace.min.css" rel="stylesheet">
    <script src="../../assets/admin/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../../assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/admin/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="../../assets/admin/css/app.css" rel="stylesheet">
    <link href="../../assets/admin/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../../assets/admin/css/dark-theme.css">
    <link rel="stylesheet" href="../../assets/admin/css/semi-dark.css">
    <link rel="stylesheet" href="../../assets/admin/css/header-colors.css">
    <title>Aurora Coffee - Admin Dashboard</title>
</head>

<body
    style="background-image: url('../../assets/admin//images//avatars/3.png'); width: 100%; height: 100vh; background-size: 100% 100%; overflow-x: hidden; background-repeat: no-repeat; overflow-x: hidden;">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!--wrapper-->
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="topbar-logo-header">
                        <div class="px-5 mx-4">
                            <a href="../../indexAdmin">
                                <img src="../../assets/admin/images/avatars/Aurora_Coffee.png" style="scale: 6;"
                                    class="logo-icon" alt="logo icon">
                            </a>
                        </div>

                    </div>
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                    <div class="top-menu ms-auto">
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../assets/admin/images/avatars/avatar-2.png" class="user-img"
                                alt="user avatar">
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
                    <img src="../../assets/admin/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Rukada</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <nav class="navbar navbar-expand-xl w-100">
                <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="/indexAdmin">
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
                    <li class="nav-item">
                        <a class="nav-link " href="/pagesAdmin/quanlykhachhang">
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
                    <li class="nav-item dropdown" style="background-color: #AB826B;">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            style="color:white" data-bs-toggle="dropdown">
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
                            <li> <a class="dropdown-item" href="/pagesAdmin/vattu" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Vật Tư</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            <div class="parent-icon"><i class="fa-solid fa-person"></i>
                            </div>
                            <div class="menu-title">Quản Lý Nhân Viên</div>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="/pagesAdmin/nhanvien" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Nhân viên</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/phanquyen" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Phân Quyền</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/quanlyluong" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Quản Lý Lương</a>
                            </li>
                            <li> <a class="dropdown-item" href="/pagesAdmin/quanlyluong" target="_blank"><i
                                        class="bx bx-right-arrow-alt"></i>Thưởng/Phạt</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--end navigation-->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="my-3 text-center" style="color: #AB826B;">Danh Mục Quản Lý</h5>
                                <div class="fm-menu">
                                    <div class="list-group list-group-flush"> <a
                                            style="background-color: #AB826B; color: white;" href="./quanly"
                                            class="list-group-item py-1"><i class="bx bx-folder me-2"></i><span>Lịch
                                                Làm
                                                Việc</span></a>
                                        <a href="./quanly/nhanvien" class="list-group-item py-1"><i
                                                class="bx bx-devices me-2"></i><span>Nhân Viên</span></a>
                                        <a href="./quanly/tongketdoanhthu" class="list-group-item py-1"><i
                                                class="bx bx-analyse me-2"></i><span>Tổng Kết Doanh Thu</span></a>
                                        <a href="./quanly/vattu" class="list-group-item py-1"><i
                                                class="bx bx-plug me-2"></i><span>Vật Tư</span></a>
                                        <a href="./quanly/kho" class="list-group-item py-1"><i
                                                class="bx bx-trash-alt me-2"></i><span>Kho</span></a>
                                        <a href="./quanly/pheduyet" class="list-group-item py-1"><i
                                                class="bx bx-file me-2"></i>
                                            <span>Phê Duyệt</span></a>
                                        <a href="./quanly/baocao" class="list-group-item py-1"><i
                                                class="bx bx-image me-2"></i><span>Báo Cáo</span></a>
                                        <a href="./quanly/ghichu" class="list-group-item py-1"><i
                                                class="bx bx-video me-2"></i><span>Ghi Chú</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--breadcrumb-->
                    <!--end breadcrumb-->
                    <div class="col-12 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                        <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                            <div class="fc-toolbar-chunk">
                                                <div class="fc-button-group"><button
                                                        class="fc-prev-button fc-button fc-button-primary"
                                                        type="button" aria-label="prev"><span
                                                            class="fc-icon fc-icon-chevron-left"></span></button><button
                                                        class="fc-next-button fc-button fc-button-primary"
                                                        type="button" aria-label="next"><span
                                                            class="fc-icon fc-icon-chevron-right"></span></button>
                                                </div>
                                                <button class="fc-today-button fc-button fc-button-primary"
                                                    type="button">today</button>
                                            </div>
                                            <div class="fc-toolbar-chunk">
                                                <h2 class="fc-toolbar-title">September 2020</h2>
                                            </div>
                                            <div class="fc-toolbar-chunk">
                                                <div class="fc-button-group"><button
                                                        class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active"
                                                        type="button">month</button><button
                                                        class="fc-timeGridWeek-button fc-button fc-button-primary"
                                                        type="button">week</button><button
                                                        class="fc-timeGridDay-button fc-button fc-button-primary"
                                                        type="button">day</button><button
                                                        class="fc-listWeek-button fc-button fc-button-primary"
                                                        type="button">list</button></div>
                                            </div>
                                        </div>
                                        <div class="fc-view-harness fc-view-harness-active"
                                            style="height: 947.407px;">
                                            <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                                <table class="fc-scrollgrid  fc-scrollgrid-liquid">
                                                    <thead>
                                                        <tr
                                                            class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                            <td>
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller"
                                                                        style="overflow: hidden;">
                                                                        <table class="fc-col-header "
                                                                            style="width: 1277px;">
                                                                            <colgroup></colgroup>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-sun">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Sun</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-mon">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Mon</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-tue">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Tue</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-wed">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Wed</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-thu">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Thu</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-fri">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Fri</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-sat">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Sat</a>
                                                                                        </div>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                            <td>
                                                                <div
                                                                    class="fc-scroller-harness fc-scroller-harness-liquid">
                                                                    <div class="fc-scroller fc-scroller-liquid-absolute"
                                                                        style="overflow: hidden auto;">
                                                                        <div class="fc-daygrid-body fc-daygrid-body-balanced "
                                                                            style="width: 1277px;">
                                                                            <table class="fc-scrollgrid-sync-table"
                                                                                style="width: 1277px; height: 920px;">
                                                                                <colgroup></colgroup>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                            data-date="2020-08-30">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-08-30&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">30</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                            data-date="2020-08-31">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-08-31&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">31</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-09-01">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-01&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">1</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            All
                                                                                                                            Day
                                                                                                                            Event
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-09-02">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-02&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">2</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-09-03">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-03&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">3</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-09-04">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-04&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">4</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-09-05">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-05&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">5</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-09-06">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-06&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">6</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-09-07">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-07&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">7</a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-events"
                                                                                                    style="padding-bottom: 22.45px;">
                                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                        style="right: -364.85px;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Long
                                                                                                                            Event
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-09-08">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-08&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">8</a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-events"
                                                                                                    style="padding-bottom: 22.45px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-09-09">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-09&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">9</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 22.45px;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                4p</div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Repeating
                                                                                                                Event
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-09-10">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-10&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">10</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-09-11">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-11&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">11</a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-events"
                                                                                                    style="padding-bottom: 22.45px;">
                                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                        style="right: -182.85px;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Conference
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-09-12">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-12&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">12</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 22.45px;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                10:30a
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Meeting
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                12p
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Lunch
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                2:30p
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Meeting
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                        style="visibility: hidden;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                5:30p
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Happy
                                                                                                                Hour
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                        style="visibility: hidden;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                8p</div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Dinner
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-bottom">
                                                                                                        <a
                                                                                                            class="fc-daygrid-more-link">+2
                                                                                                            more</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-09-13">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-13&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">13</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                7a</div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Birthday
                                                                                                                Party
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-09-14">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-14&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">14</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-09-15">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-15&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">15</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-09-16">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-16&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">16</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                            <div
                                                                                                                class="fc-daygrid-event-dot">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-time">
                                                                                                                4p</div>
                                                                                                            <div
                                                                                                                class="fc-event-title">
                                                                                                                Repeating
                                                                                                                Event
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-09-17">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-17&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">17</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-09-18">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-18&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">18</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-09-19">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-19&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">19</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-09-20">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-20&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">20</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-09-21">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-21&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">21</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-09-22">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-22&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">22</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-09-23">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-23&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">23</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-09-24">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-24&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">24</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-09-25">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-25&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">25</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-09-26">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-26&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">26</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-09-27">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-27&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">27</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-09-28">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-28&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">28</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past"
                                                                                                            href="http://google.com/">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Click
                                                                                                                            for
                                                                                                                            Google
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-09-29">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-29&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">29</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-09-30">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-09-30&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">30</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other"
                                                                                            data-date="2020-10-01">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-01&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">1</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other"
                                                                                            data-date="2020-10-02">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-02&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">2</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past fc-day-other"
                                                                                            data-date="2020-10-03">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-03&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">3</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                            data-date="2020-10-04">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-04&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">4</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                            data-date="2020-10-05">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-05&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">5</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                                            data-date="2020-10-06">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-06&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">6</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other"
                                                                                            data-date="2020-10-07">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-07&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">7</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other"
                                                                                            data-date="2020-10-08">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-08&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">8</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other"
                                                                                            data-date="2020-10-09">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-09&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">9</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past fc-day-other"
                                                                                            data-date="2020-10-10">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a class="fc-daygrid-day-number"
                                                                                                        data-navlink="{&quot;date&quot;:&quot;2020-10-10&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                        tabindex="0">10</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                    <div class="fc-daygrid-bg-harness"
                                                                                                        style="left: 0px; right: 0px;">
                                                                                                        <div
                                                                                                            class="fc-non-business">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../../assets/admin/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../../assets/admin/js/jquery.min.js"></script>
    <script src="../../assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../../assets/admin/plugins/fullcalendar/js/main.min.js"></script>
    <script src="../../assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../../assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                initialView: 'dayGridMonth',
                initialDate: '2020-09-12',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                nowIndicator: true,
                dayMaxEvents: true, // allow "more" link when too many events
                editable: true,
                selectable: true,
                businessHours: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [{
                    title: 'All Day Event',
                    start: '2020-09-01',
                }, {
                    title: 'Tuấn',
                    start: '2020-09-07',
                    end: '2020-09-10'
                }, {
                    groupId: 999,
                    title: 'Trọng',
                    start: '2020-09-09T16:00:00'
                }, {
                    groupId: 999,
                    title: 'Trọng',
                    start: '2020-09-16T16:00:00'
                }, {
                    title: 'Huy',
                    start: '2020-09-11',
                    end: '2020-09-13'
                }, {
                    title: 'Ninh',
                    start: '2020-09-12T10:30:00',
                    end: '2020-09-12T12:30:00'
                }, {
                    title: 'Ân',
                    start: '2020-09-12T12:00:00'
                }, {
                    title: 'Trọng',
                    start: '2020-09-12T14:30:00'
                }, {
                    title: 'Ninh',
                    start: '2020-09-12T17:30:00'
                }, {
                    title: 'Huy',
                    start: '2020-09-12T20:00:00'
                }, {
                    title: 'Huy',
                    start: '2020-09-13T07:00:00'
                }, {
                    title: 'Tuấn',
                    url: 'http://google.com/',
                    start: '2020-09-28'
                }]
            });
            calendar.render();
        });
    </script>
    <!--app JS-->
    <script src="../../assets/admin/js/app.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
