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
	<div class="wrapper">
		<!--start header wrapper-->
		<div class="header-wrapper ">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand">
						<div class="topbar-logo-header">
							<div class="px-5 mx-4">
								<a href="/indexAdmin.html">
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
								<img src="../../assets/admin/admin/images/avatars/avatar-2.png" class="user-img"
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
                            <li class="nav-item dropdown" style="background-color: #AB826B;">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" style="color:white"
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
		<div class="page-wrapper ">
			<div class="row mt-3">
				<div class="col-3 mt-3">
					<div class="card" style="border-bottom: 5px solid  #AB826B;">
						<div class="card-header mb-2" style="color: #AB826B;">Tạo quyền</div>
						<div class="card-body mb-2">
							<label for="" class="mb-2">Tên quyền</label>
							<input class="form-control" type="text">
							<label for="" class="mb-2 mt-2">Trạng thái</label>
							<select name="" class="form-select mb-2 mt-2 " id="">
								<option value="1">Hiển thị</option>
								<option value="2">Tạm tắt</option>
							</select>
						</div>
						<div class="card-footer text-end">
							<button type="button" class="btn btn-outline-info text- px-2 text-end">Thêm mới</button>
						</div>
					</div>

				</div>
				<div class="col-6 mt-3">
					<div class="card" style="border-bottom: 5px solid  #AB826B;">
						<div class="card-header text-center" style="color: #AB826B;">Danh sách quyền</div>
						<div class="card-body">
							<table class="table table-bordered">
								<tr>
									<th style="background-color: #AB826B; color:white;"><button type="button"
											class="btn btn-white btn-outline-danger text-px-1">Xoá</button></th>
									<th style="background-color: #AB826B; color:white;"
										class="align-middle text-center">Tên quyền</th>
									<th style="background-color: #AB826B; color:white;" colspan="3"
										class="align-middle text-center">Action</th>
								</tr>
								<tr>
									<td class="align-middle text-center">
										<div class="form-check align-middle text-center ">
											<input class="form-check-input ms-2" type="checkbox" value=""
												id="flexCheckDefault">
											<label class="form-check-label" for="flexCheckDefault">
											</label>
										</div>
									</td>
									<td>Admin</td>
									<td colspan="3" class="align-middle text-center">
										<button type="button" class="btn btn-outline-success btn-sm">Cấp quyền</button>
										<button type="button" class="btn btn-outline-info btn-sm "
											data-bs-toggle="modal" data-bs-target="#exampleModal">Cập nhật</button>

										<button type="button" class="btn btn-outline-danger btn-sm "
											data-bs-toggle="modal" data-bs-target="#exampleModal1">Xoá bỏ</button>
									</td>
									<div class="modal fade" id="exampleModal" tabindex="-1"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật</h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="card-body mb-2">
														<label for="" class="mb-2">Tên quyền</label>
														<input class="form-control" type="text">
														<label for="" class="mb-2 mt-2">Trạng thái</label>
														<select name="" class="form-select mb-2 mt-2 " id="">
															<option value="1">Hiển thị</option>
															<option value="2">Tạm tắt</option>
														</select>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Đóng</button>
													<button type="button" class="btn btn-primary">Lưu</button>
												</div>
											</div>
										</div>
									</div>

									<div class="modal fade" id="exampleModal1" tabindex="-1"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-3 text-center" id="exampleModalLabel ">
														Xoá quyền !?
													</h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body ">
													<div class="card" style="background-color: rgb(205, 220, 255)">
														<div class="card-header text-primary">
															Bạn có muốn xoá quyền <a
																class="text-danger link-offset-2 link-underline link-underline-opacity-0"
																href="#">ADMIN </a> này không ?
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Đóng</button>
													<button type="button" class="btn btn-primary">Lưu</button>
												</div>
											</div>
										</div>
									</div>
								</tr>
							</table>
						</div>
					</div>


				</div>
				<div class="col-3 mt-3">

					<div class="card" style="border-bottom: 5px solid  #AB826B;">
						<div class="card-header text-center align-middle "><b class="text-center align-middle"
								style="color: #AB826B;">Phân quyền</b>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="card-body">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Quản lý Bàn
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Quản lý Kho
										</label>

									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Quản lý Nhân Viên
										</label>
									</div>

								</div>
							</div>
							<div class="col-6">
								<div class="card-body">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Quản lý Món
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Quản lý Vật Tư
										</label>

									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Quản lý Lương
										</label>
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
							return window.location.href = "/pagesAdmin/login.html"
						}
					});

					function logout() {
						localStorage.removeItem('login')
						return window.location.href = "/pagesAdmin/login.html"
					}
				</script>
</body>

</html>
