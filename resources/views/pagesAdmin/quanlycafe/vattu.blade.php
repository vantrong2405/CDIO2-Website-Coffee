<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../../assets/admin/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="../../assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../../assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../../assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../../assets/admin/css/pace.min.css" rel="stylesheet" />
	<script src="../../assets/admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../../assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/admin/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="../../assets/admin/css/app.css" rel="stylesheet">
	<link href="../../assets/admin/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="../../assets/admin/css/dark-theme.css" />
	<link rel="stylesheet" href="../../assets/admin/css/semi-dark.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../../assets/admin/css/header-colors.css" />
	<title>Aurora Coffee - Admin Dashboard</title>
</head>

<body
	style="background-image: url('../../assets/admin/images/avatars/3.png'); width: 100%; height: 100vh; background-size: 100% 100%; overflow-x: hidden; background-repeat: no-repeat; overflow-x: hidden;">
	<!--wrapper-->
	<div class="wrapper ">
		<!--start header wrapper-->
		<div class="header-wrapper ">
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
						<li class="nav-item" >
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
						<li class="nav-item" >
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
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" style="color:white" href="javascript:;"
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
                        </li>
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
				<div class="row">
					<div class="card" style="border-bottom: 5px solid  #AB826B;">
						<h4 class="card-header text-center py-2" style="color: #AB826B;"> Danh Sách Vật Tư </h4>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center align-middle text-nowrap"
												style="background-color: #AB826B; color:white;">#</th>
											<th class="text-center align-middle text-nowrap"
												style="background-color: #AB826B; color:white;">Tên Vật Tư</th>
											<th class="text-center align-middle text-nowrap"
												style="background-color: #AB826B; color:white;">Số Lượng</th>
											<th class="text-center align-middle text-nowrap"
												style="background-color: #AB826B; color:white;">Chi Tiết</th>
											<th class="text-center align-middle text-nowrap"
												style="background-color: #AB826B; color:white;">Ghi Chú</th>
											<th class="text-center align-middle text-nowrap"
												style="background-color: #AB826B; color:white;">Tình Trạng</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="text-center align-middle text-nowrap">1</th>
											<td class="align-middle text-nowrap">Cà phê hạt</td>

											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="30kg"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">2</th>

											<td class="align-middle text-nowrap"> Sữa tươi </td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="40 hộp"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">3</th>

											<td class="align-middle text-nowrap">Sữa đặc</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="32,9kg"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">4</th>

											<td class="align-middle text-nowrap">Syrup vani</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="3kg"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-danger">Gần hết</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">5</th>

											<td class="align-middle text-nowrap">Đường</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="80,2kg"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">6</th>

											<td class="align-middle text-nowrap">Bát trà xanh</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="412 chiếc"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">7</th>

											<td class="align-middle text-nowrap">Sữa béo</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="52 hộp"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">8</th>

											<td class="align-middle text-nowrap">Thuốc lá</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="300 hộp"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">9</th>

											<td class="align-middle text-nowrap">Muối</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="32kg"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-success">Tốt</div>
											</td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">10</th>

											<td class="align-middle text-nowrap">Khăn giấy</td>
											<td class="text-center align-middle text-nowrap"><input type="text"
													class="form-control" value="22 hộp"></td>
											<td class="text-center align-middle text-nowrap">
												<div class="btn btn-warning"><i
														class="fa-solid fs-5 ms-1 text-light fa-info"></i></div>
											</td>
											<td class="text-center align-middle text-nowrap"><i
													class="fa-solid fa-file-pen fa-2x text-primary"></i></td>
											<td class="text-center">
												<div class="btn btn-danger">Gần hết</div>
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
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
	</div>
	<!-- Bootstrap JS -->
	<script src="../../assets/admin/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../../assets/admin/js/jquery.min.js"></script>
	<script src="../../assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../../assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../../assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="../../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="../../assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../../assets/admin/plugins/chartjs/js/Chart.min.js"></script>
	<script src="../../assets/admin/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="../../assets/admin/js/index.js"></script>
	<!--app JS-->
	<script src="../../assets/admin/js/app.js"></script>
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
