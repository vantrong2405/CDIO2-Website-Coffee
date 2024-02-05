<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/admin/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/admin/css/pace.min.css" rel="stylesheet" />
	<script src="assets/admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/admin/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/admin/css/app.css" rel="stylesheet">
	<link href="assets/admin/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/admin/css/header-colors.css" />
	<title>Aurora Coffee - Admin Dashboard</title>
</head>

<body
	style="background-image: url('./assets/admin/images/avatars/3.png'); width: 100vw; height: 100vh; background-size: 100% 100%; overflow-x: hidden; background-repeat: no-repeat; overflow-x: hidden;">
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
								<a href="/indexAdmin">
									<img src="./assets/admin/images/avatars/Aurora_Coffee.png" style="scale: 6;"
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
								<img src="assets/admin/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
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
						<img src="assets/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
					</div>
					<div>
						<h4 class="logo-text">Rukada</h4>
					</div>
					<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
					</div>
				</div>
				<nav class="navbar navbar-expand-xl w-100">
					<ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
						<li class="nav-item" style="background-color: #AB826B;">
							<a class="nav-link" href="/indexAdmin" style="color:white">
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
					<div class="col-4 mt-3">
						<div class="card radius-10 border-start border-0 border-3 border-info" style="height: 110px;">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Tổng số đơn đặt hàng CAFE trong Tuần</p>
										<h4 class="my-1 text-info">1,067</h4>
										<p class="mb-0 font-13"> + 2.78% So Với Tuần Trước</p>
									</div>
									<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
										<i class="bx bxs-cart"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4 mt-3">
						<div class="card radius-10 border-start border-0 border-3 border-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Tổng Doanh Thu Trong Tuần</p>
										<h4 class="my-1 text-danger">34,384,245 vnd </h4>
										<p class="mb-0 font-13">+5.4% so với Tuần trước</p>
									</div>
									<div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i
											class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-4 mt-3">
						<div class="card radius-10 border-start border-0 border-3 border-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Tổng số khách đến quán</p>
										<h4 class="my-1 text-warning">1.3K</h4>
										<p class="mb-0 font-13">+8.4% từ Tuần trước</p>
									</div>
									<div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
										<i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-12 mt-3">
						<div class="row">
							<div class="col-md-6">
								<div class="card radius-10" style="height: 550px;">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div>
												<h6 class="mb-0">Tổng quan về doanh số </h6>
											</div>
											<div class="dropdown ms-auto">
												<a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
													data-bs-toggle="dropdown"><i
														class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
												</a>
											</div>
										</div>
										<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
											<span class="border px-1 rounded cursor-pointer"><i
													class="bx bxs-circle me-1" style="color: #14abef"></i>Bán Tại
												Quán</span>
											<span class="border px-1 rounded cursor-pointer"><i
													class="bx bxs-circle me-1" style="color: #ffc107"></i>Giao
												Hàng</span>
										</div>
										<div class="chart-container-1">
											<canvas id="chart1"></canvas>
										</div>
									</div>
									<div
										class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
										<div class="col">
											<div class="p-3">
												<h5 class="mb-0">108.000.000 VNĐ</h5>
												<small class="mb-0">Doanh thu bán tại quán <span> <i
															class="bx bx-up-arrow-alt align-middle"></i>
														2.43%</span></small>
											</div>
										</div>
										<div class="col">
											<div class="p-3">
												<h5 class="mb-0">06:30 - 08:30</h5>
												<small class="mb-0">Thời gian cao điểm <span> <i
															class="bx bx-up-arrow-alt align-middle"></i>
														12.65%</span></small>
											</div>
										</div>
										<div class="col">
											<div class="p-3">
												<h5 class="mb-0">208 đơn hàng</h5>
												<small class="mb-0">Qua Delivery <span> <i
															class="bx bx-up-arrow-alt align-middle"></i>
														5.62%</span></small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-12 ">
										<div class="card radius-10">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<h6 class="mb-0">Món được sử dụng nhiều trong tuần</h6>
													</div>
													<div class="dropdown ms-auto">
														<a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
															data-bs-toggle="dropdown"><i
																class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
														</a>

													</div>
												</div>
												<div class="chart-container-2 mt-4" style="height: 130px;">
													<div class="row">
														<div class="col-md-8">
															<canvas id="chart2"
																style="transform: translateY(-20px);"></canvas>
														</div>
														<div class="col-md-4" style="transform: translateY(-20px);">
															<ul class="list-group list-group-flush">
																<li
																	class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
																	Americano <span
																		class="badge bg-success rounded-pill">25</span>
																</li>
																<li
																	class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
																	Expresso <span
																		class="badge bg-danger rounded-pill">10</span>
																</li>
																<li
																	class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
																	Trà Sữa Ô Long <span
																		class="badge bg-primary rounded-pill">65</span>
																</li>
																<li
																	class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
																	Cafe Sài Gòn <span
																		class="badge bg-warning text-dark rounded-pill">14</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="card radius-10 ">
											<div class="card-body" style="position: relative;">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Doanh thu từ Website trong tháng</p>
														<h5 class="mb-0">85,028</h5>
													</div>
													<div class="dropdown ms-auto">
														<div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
															data-bs-toggle="dropdown"> <i
																class="bx bx-dots-horizontal-rounded font-22"></i>
														</div>

													</div>
												</div>
												<div class="" id="w-chart1" style="min-height: 65px;">
													<div id="apexchartsetges2m8j"
														class="apexcharts-canvas apexchartsetges2m8j apexcharts-theme-light"
														style="width: 278px; height: 65px;"><svg id="SvgjsSvg1645"
															width="278" height="65" xmlns="http://www.w3.org/2000/svg"
															version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
															xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
															xmlns:data="ApexChartsNS" transform="translate(0, 0)"
															style="background: transparent;">
															<g id="SvgjsG1647"
																class="apexcharts-inner apexcharts-graphical"
																transform="translate(0, 0)">
																<defs id="SvgjsDefs1646">
																	<clipPath id="gridRectMasketges2m8j">
																		<rect id="SvgjsRect1652" width="284.4"
																			height="67.4" x="-3.2" y="-1.2" rx="0"
																			ry="0" opacity="1" stroke-width="0"
																			stroke="none" stroke-dasharray="0"
																			fill="#fff"></rect>
																	</clipPath>
																	<clipPath id="gridRectMarkerMasketges2m8j">
																		<rect id="SvgjsRect1653" width="282" height="69"
																			x="-2" y="-2" rx="0" ry="0" opacity="1"
																			stroke-width="0" stroke="none"
																			stroke-dasharray="0" fill="#fff"></rect>
																	</clipPath>
																	<filter id="SvgjsFilter1660"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood1661"
																			flood-color="#17a00e" flood-opacity="0.12"
																			result="SvgjsFeFlood1661Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite1662"
																			in="SvgjsFeFlood1661Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite1662Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset1663" dx="14" dy="3"
																			result="SvgjsFeOffset1663Out"
																			in="SvgjsFeComposite1662Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur1664"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur1664Out"
																			in="SvgjsFeOffset1663Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge1665"
																			result="SvgjsFeMerge1665Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode1666"
																				in="SvgjsFeGaussianBlur1664Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode1667"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend1668"
																			in="SourceGraphic" in2="SvgjsFeMerge1665Out"
																			mode="normal" result="SvgjsFeBlend1668Out">
																		</feBlend>
																	</filter>
																</defs>
																<line id="SvgjsLine1651" x1="252.22727272727275" y1="0"
																	x2="252.22727272727275" y2="65" stroke="#b6b6b6"
																	stroke-dasharray="3" class="apexcharts-xcrosshairs"
																	x="252.22727272727275" y="0" width="1" height="65"
																	fill="#b1b9c4" filter="none" fill-opacity="0.9"
																	stroke-width="1"></line>
																<g id="SvgjsG1669" class="apexcharts-xaxis"
																	transform="translate(0, 0)">
																	<g id="SvgjsG1670" class="apexcharts-xaxis-texts-g"
																		transform="translate(0, -4)"></g>
																</g>
																<g id="SvgjsG1672" class="apexcharts-grid">
																	<g id="SvgjsG1673"
																		class="apexcharts-gridlines-horizontal"
																		style="display: none;">
																		<line id="SvgjsLine1675" x1="0" y1="0" x2="278"
																			y2="0" stroke="#e0e0e0" stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine1676" x1="0" y1="13" x2="278"
																			y2="13" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine1677" x1="0" y1="26" x2="278"
																			y2="26" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine1678" x1="0" y1="39" x2="278"
																			y2="39" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine1679" x1="0" y1="52" x2="278"
																			y2="52" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine1680" x1="0" y1="65" x2="278"
																			y2="65" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																	</g>
																	<g id="SvgjsG1674"
																		class="apexcharts-gridlines-vertical"
																		style="display: none;"></g>
																	<line id="SvgjsLine1682" x1="0" y1="65" x2="278"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																	<line id="SvgjsLine1681" x1="0" y1="1" x2="0"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																</g>
																<g id="SvgjsG1655"
																	class="apexcharts-line-series apexcharts-plot-series">
																	<g id="SvgjsG1656" class="apexcharts-series"
																		seriesName="TotalxUsers"
																		data:longestSeries="true" rel="1"
																		data:realIndex="0">
																		<path id="SvgjsPath1659"
																			d="M 0 49.4C 8.845454545454546 49.4 16.42727272727273 54.6 25.272727272727273 54.6C 34.11818181818182 54.6 41.7 21.384999999999998 50.54545454545455 21.384999999999998C 59.39090909090909 21.384999999999998 66.97272727272728 38.09 75.81818181818183 38.09C 84.66363636363637 38.09 92.24545454545455 28.925000000000004 101.0909090909091 28.925000000000004C 109.93636363636364 28.925000000000004 117.51818181818183 48.295 126.36363636363637 48.295C 135.20909090909092 48.295 142.7909090909091 6.435000000000002 151.63636363636365 6.435000000000002C 160.4818181818182 6.435000000000002 168.0636363636364 25.155 176.90909090909093 25.155C 185.75454545454548 25.155 193.33636363636364 17.745000000000005 202.1818181818182 17.745000000000005C 211.02727272727273 17.745000000000005 218.60909090909092 38.09 227.45454545454547 38.09C 236.3 38.09 243.8818181818182 28.925000000000004 252.72727272727275 28.925000000000004C 261.57272727272726 28.925000000000004 269.1545454545455 48.295 278 48.295"
																			fill="none" fill-opacity="1"
																			stroke="rgba(23,160,14,1)"
																			stroke-opacity="1" stroke-linecap="butt"
																			stroke-width="2.4" stroke-dasharray="0"
																			class="apexcharts-line" index="0"
																			clip-path="url(#gridRectMasketges2m8j)"
																			filter="url(#SvgjsFilter1660)"
																			pathTo="M 0 49.4C 8.845454545454546 49.4 16.42727272727273 54.6 25.272727272727273 54.6C 34.11818181818182 54.6 41.7 21.384999999999998 50.54545454545455 21.384999999999998C 59.39090909090909 21.384999999999998 66.97272727272728 38.09 75.81818181818183 38.09C 84.66363636363637 38.09 92.24545454545455 28.925000000000004 101.0909090909091 28.925000000000004C 109.93636363636364 28.925000000000004 117.51818181818183 48.295 126.36363636363637 48.295C 135.20909090909092 48.295 142.7909090909091 6.435000000000002 151.63636363636365 6.435000000000002C 160.4818181818182 6.435000000000002 168.0636363636364 25.155 176.90909090909093 25.155C 185.75454545454548 25.155 193.33636363636364 17.745000000000005 202.1818181818182 17.745000000000005C 211.02727272727273 17.745000000000005 218.60909090909092 38.09 227.45454545454547 38.09C 236.3 38.09 243.8818181818182 28.925000000000004 252.72727272727275 28.925000000000004C 261.57272727272726 28.925000000000004 269.1545454545455 48.295 278 48.295"
																			pathFrom="M -1 65L -1 65L 25.272727272727273 65L 50.54545454545455 65L 75.81818181818183 65L 101.0909090909091 65L 126.36363636363637 65L 151.63636363636365 65L 176.90909090909093 65L 202.1818181818182 65L 227.45454545454547 65L 252.72727272727275 65L 278 65">
																		</path>
																		<g id="SvgjsG1657"
																			class="apexcharts-series-markers-wrap"
																			data:realIndex="0">
																			<g class="apexcharts-series-markers">
																				<circle id="SvgjsCircle1688" r="0"
																					cx="252.72727272727275"
																					cy="28.925000000000004"
																					class="apexcharts-marker wogv0cwikk no-pointer-events"
																					stroke="#ffffff" fill="#17a00e"
																					fill-opacity="1" stroke-width="2"
																					stroke-opacity="0.9"
																					default-marker-size="0"></circle>
																			</g>
																		</g>
																	</g>
																	<g id="SvgjsG1658" class="apexcharts-datalabels"
																		data:realIndex="0"></g>
																</g>
																<line id="SvgjsLine1683" x1="0" y1="0" x2="278" y2="0"
																	stroke="#b6b6b6" stroke-dasharray="0"
																	stroke-width="1" class="apexcharts-ycrosshairs">
																</line>
																<line id="SvgjsLine1684" x1="0" y1="0" x2="278" y2="0"
																	stroke-dasharray="0" stroke-width="0"
																	class="apexcharts-ycrosshairs-hidden"></line>
																<g id="SvgjsG1685" class="apexcharts-yaxis-annotations">
																</g>
																<g id="SvgjsG1686" class="apexcharts-xaxis-annotations">
																</g>
																<g id="SvgjsG1687" class="apexcharts-point-annotations">
																</g>
															</g>
															<rect id="SvgjsRect1650" width="0" height="0" x="0" y="0"
																rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
																stroke-dasharray="0" fill="#fefefe"></rect>
															<g id="SvgjsG1671" class="apexcharts-yaxis" rel="0"
																transform="translate(-18, 0)"></g>
															<g id="SvgjsG1648" class="apexcharts-annotations"></g>
														</svg>
														<div class="apexcharts-legend"></div>
														<div class="apexcharts-tooltip apexcharts-theme-dark"
															style="left: 196.202px; top: 32.425px;">
															<div class="apexcharts-tooltip-series-group apexcharts-active"
																style="display: flex;"><span
																	class="apexcharts-tooltip-marker"
																	style="background-color: rgb(23, 160, 14); display: none;"></span>
																<div class="apexcharts-tooltip-text"
																	style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
																	<div class="apexcharts-tooltip-y-group"><span
																			class="apexcharts-tooltip-text-label"></span><span
																			class="apexcharts-tooltip-text-value"></span>
																	</div>
																	<div class="apexcharts-tooltip-z-group"><span
																			class="apexcharts-tooltip-text-z-label"></span><span
																			class="apexcharts-tooltip-text-z-value"></span>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
															<div class="apexcharts-yaxistooltip-text"></div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card radius-10">
											<div class="card-body" style="position: relative;">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Tổng số khách Order qua Website</p>
														<h5 class="mb-0">42,892</h5>
													</div>
													<div class="dropdown ms-auto">
														<div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
															data-bs-toggle="dropdown"> <i
																class="bx bx-dots-horizontal-rounded font-22"></i>
														</div>

													</div>
												</div>
												<div class="" id="w-chart2" style="min-height: 65px;">
													<div id="apexchartsc5t59j5k"
														class="apexcharts-canvas apexchartsc5t59j5k apexcharts-theme-light"
														style="width: 278px; height: 65px;"><svg id="SvgjsSvg3236"
															width="278" height="65" xmlns="http://www.w3.org/2000/svg"
															version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
															xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
															xmlns:data="ApexChartsNS" transform="translate(0, 0)"
															style="background: transparent;">
															<g id="SvgjsG3238"
																class="apexcharts-inner apexcharts-graphical"
																transform="translate(0, 0)">
																<defs id="SvgjsDefs3237">
																	<linearGradient id="SvgjsLinearGradient3241" x1="0"
																		y1="0" x2="0" y2="1">
																		<stop id="SvgjsStop3242" stop-opacity="0.4"
																			stop-color="rgba(216,227,240,0.4)"
																			offset="0"></stop>
																		<stop id="SvgjsStop3243" stop-opacity="0.5"
																			stop-color="rgba(190,209,230,0.5)"
																			offset="1"></stop>
																		<stop id="SvgjsStop3244" stop-opacity="0.5"
																			stop-color="rgba(190,209,230,0.5)"
																			offset="1"></stop>
																	</linearGradient>
																	<clipPath id="gridRectMaskc5t59j5k">
																		<rect id="SvgjsRect3246" width="282" height="65"
																			x="-2" y="0" rx="0" ry="0" opacity="1"
																			stroke-width="0" stroke="none"
																			stroke-dasharray="0" fill="#fff"></rect>
																	</clipPath>
																	<clipPath id="gridRectMarkerMaskc5t59j5k">
																		<rect id="SvgjsRect3247" width="282" height="69"
																			x="-2" y="-2" rx="0" ry="0" opacity="1"
																			stroke-width="0" stroke="none"
																			stroke-dasharray="0" fill="#fff"></rect>
																	</clipPath>
																	<filter id="SvgjsFilter3253"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3254"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3254Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3255"
																			in="SvgjsFeFlood3254Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3255Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3256" dx="14" dy="3"
																			result="SvgjsFeOffset3256Out"
																			in="SvgjsFeComposite3255Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3257"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3257Out"
																			in="SvgjsFeOffset3256Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3258"
																			result="SvgjsFeMerge3258Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3259"
																				in="SvgjsFeGaussianBlur3257Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3260"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3261"
																			in="SourceGraphic" in2="SvgjsFeMerge3258Out"
																			mode="normal" result="SvgjsFeBlend3261Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3263"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3264"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3264Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3265"
																			in="SvgjsFeFlood3264Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3265Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3266" dx="14" dy="3"
																			result="SvgjsFeOffset3266Out"
																			in="SvgjsFeComposite3265Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3267"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3267Out"
																			in="SvgjsFeOffset3266Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3268"
																			result="SvgjsFeMerge3268Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3269"
																				in="SvgjsFeGaussianBlur3267Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3270"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3271"
																			in="SourceGraphic" in2="SvgjsFeMerge3268Out"
																			mode="normal" result="SvgjsFeBlend3271Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3273"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3274"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3274Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3275"
																			in="SvgjsFeFlood3274Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3275Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3276" dx="14" dy="3"
																			result="SvgjsFeOffset3276Out"
																			in="SvgjsFeComposite3275Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3277"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3277Out"
																			in="SvgjsFeOffset3276Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3278"
																			result="SvgjsFeMerge3278Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3279"
																				in="SvgjsFeGaussianBlur3277Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3280"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3281"
																			in="SourceGraphic" in2="SvgjsFeMerge3278Out"
																			mode="normal" result="SvgjsFeBlend3281Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3283"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3284"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3284Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3285"
																			in="SvgjsFeFlood3284Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3285Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3286" dx="14" dy="3"
																			result="SvgjsFeOffset3286Out"
																			in="SvgjsFeComposite3285Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3287"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3287Out"
																			in="SvgjsFeOffset3286Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3288"
																			result="SvgjsFeMerge3288Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3289"
																				in="SvgjsFeGaussianBlur3287Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3290"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3291"
																			in="SourceGraphic" in2="SvgjsFeMerge3288Out"
																			mode="normal" result="SvgjsFeBlend3291Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3293"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3294"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3294Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3295"
																			in="SvgjsFeFlood3294Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3295Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3296" dx="14" dy="3"
																			result="SvgjsFeOffset3296Out"
																			in="SvgjsFeComposite3295Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3297"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3297Out"
																			in="SvgjsFeOffset3296Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3298"
																			result="SvgjsFeMerge3298Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3299"
																				in="SvgjsFeGaussianBlur3297Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3300"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3301"
																			in="SourceGraphic" in2="SvgjsFeMerge3298Out"
																			mode="normal" result="SvgjsFeBlend3301Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3303"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3304"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3304Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3305"
																			in="SvgjsFeFlood3304Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3305Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3306" dx="14" dy="3"
																			result="SvgjsFeOffset3306Out"
																			in="SvgjsFeComposite3305Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3307"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3307Out"
																			in="SvgjsFeOffset3306Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3308"
																			result="SvgjsFeMerge3308Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3309"
																				in="SvgjsFeGaussianBlur3307Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3310"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3311"
																			in="SourceGraphic" in2="SvgjsFeMerge3308Out"
																			mode="normal" result="SvgjsFeBlend3311Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3313"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3314"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3314Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3315"
																			in="SvgjsFeFlood3314Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3315Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3316" dx="14" dy="3"
																			result="SvgjsFeOffset3316Out"
																			in="SvgjsFeComposite3315Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3317"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3317Out"
																			in="SvgjsFeOffset3316Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3318"
																			result="SvgjsFeMerge3318Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3319"
																				in="SvgjsFeGaussianBlur3317Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3320"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3321"
																			in="SourceGraphic" in2="SvgjsFeMerge3318Out"
																			mode="normal" result="SvgjsFeBlend3321Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3323"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3324"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3324Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3325"
																			in="SvgjsFeFlood3324Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3325Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3326" dx="14" dy="3"
																			result="SvgjsFeOffset3326Out"
																			in="SvgjsFeComposite3325Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3327"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3327Out"
																			in="SvgjsFeOffset3326Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3328"
																			result="SvgjsFeMerge3328Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3329"
																				in="SvgjsFeGaussianBlur3327Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3330"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3331"
																			in="SourceGraphic" in2="SvgjsFeMerge3328Out"
																			mode="normal" result="SvgjsFeBlend3331Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3333"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3334"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3334Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3335"
																			in="SvgjsFeFlood3334Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3335Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3336" dx="14" dy="3"
																			result="SvgjsFeOffset3336Out"
																			in="SvgjsFeComposite3335Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3337"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3337Out"
																			in="SvgjsFeOffset3336Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3338"
																			result="SvgjsFeMerge3338Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3339"
																				in="SvgjsFeGaussianBlur3337Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3340"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3341"
																			in="SourceGraphic" in2="SvgjsFeMerge3338Out"
																			mode="normal" result="SvgjsFeBlend3341Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3343"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3344"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3344Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3345"
																			in="SvgjsFeFlood3344Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3345Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3346" dx="14" dy="3"
																			result="SvgjsFeOffset3346Out"
																			in="SvgjsFeComposite3345Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3347"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3347Out"
																			in="SvgjsFeOffset3346Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3348"
																			result="SvgjsFeMerge3348Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3349"
																				in="SvgjsFeGaussianBlur3347Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3350"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3351"
																			in="SourceGraphic" in2="SvgjsFeMerge3348Out"
																			mode="normal" result="SvgjsFeBlend3351Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3353"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3354"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3354Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3355"
																			in="SvgjsFeFlood3354Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3355Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3356" dx="14" dy="3"
																			result="SvgjsFeOffset3356Out"
																			in="SvgjsFeComposite3355Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3357"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3357Out"
																			in="SvgjsFeOffset3356Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3358"
																			result="SvgjsFeMerge3358Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3359"
																				in="SvgjsFeGaussianBlur3357Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3360"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3361"
																			in="SourceGraphic" in2="SvgjsFeMerge3358Out"
																			mode="normal" result="SvgjsFeBlend3361Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3363"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3364"
																			flood-color="#f41127" flood-opacity="0.12"
																			result="SvgjsFeFlood3364Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3365"
																			in="SvgjsFeFlood3364Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3365Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3366" dx="14" dy="3"
																			result="SvgjsFeOffset3366Out"
																			in="SvgjsFeComposite3365Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3367"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3367Out"
																			in="SvgjsFeOffset3366Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3368"
																			result="SvgjsFeMerge3368Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3369"
																				in="SvgjsFeGaussianBlur3367Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3370"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3371"
																			in="SourceGraphic" in2="SvgjsFeMerge3368Out"
																			mode="normal" result="SvgjsFeBlend3371Out">
																		</feBlend>
																	</filter>
																</defs>
																<rect id="SvgjsRect3245" width="8.108333333333334"
																	height="65" x="0" y="0" rx="0" ry="0" opacity="1"
																	stroke-width="0" stroke-dasharray="3"
																	fill="url(#SvgjsLinearGradient3241)"
																	class="apexcharts-xcrosshairs" y2="65" filter="none"
																	fill-opacity="0.9"></rect>
																<g id="SvgjsG3372" class="apexcharts-xaxis"
																	transform="translate(0, 0)">
																	<g id="SvgjsG3373" class="apexcharts-xaxis-texts-g"
																		transform="translate(0, -4)"></g>
																</g>
																<g id="SvgjsG3375" class="apexcharts-grid">
																	<g id="SvgjsG3376"
																		class="apexcharts-gridlines-horizontal"
																		style="display: none;">
																		<line id="SvgjsLine3378" x1="0" y1="0" x2="278"
																			y2="0" stroke="#e0e0e0" stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3379" x1="0" y1="13" x2="278"
																			y2="13" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3380" x1="0" y1="26" x2="278"
																			y2="26" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3381" x1="0" y1="39" x2="278"
																			y2="39" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3382" x1="0" y1="52" x2="278"
																			y2="52" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3383" x1="0" y1="65" x2="278"
																			y2="65" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																	</g>
																	<g id="SvgjsG3377"
																		class="apexcharts-gridlines-vertical"
																		style="display: none;"></g>
																	<line id="SvgjsLine3385" x1="0" y1="65" x2="278"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																	<line id="SvgjsLine3384" x1="0" y1="1" x2="0"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																</g>
																<g id="SvgjsG3249"
																	class="apexcharts-bar-series apexcharts-plot-series">
																	<g id="SvgjsG3250" class="apexcharts-series" rel="1"
																		seriesName="PagexViews" data:realIndex="0">
																		<path id="SvgjsPath3252"
																			d="M 7.529166666666667 65L 7.529166666666667 51.42708333333333Q 11.583333333333334 47.37291666666666 15.637500000000001 51.42708333333333L 15.637500000000001 51.42708333333333L 15.637500000000001 65L 15.637500000000001 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3253)"
																			pathTo="M 7.529166666666667 65L 7.529166666666667 51.42708333333333Q 11.583333333333334 47.37291666666666 15.637500000000001 51.42708333333333L 15.637500000000001 51.42708333333333L 15.637500000000001 65L 15.637500000000001 65z"
																			pathFrom="M 7.529166666666667 65L 7.529166666666667 65L 15.637500000000001 65L 15.637500000000001 65L 15.637500000000001 65L 7.529166666666667 65"
																			cy="49.4" cx="30.695833333333333" j="0"
																			val="240" barHeight="15.6"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3262"
																			d="M 30.695833333333333 65L 30.695833333333333 56.62708333333333Q 34.75 52.572916666666664 38.80416666666667 56.62708333333333L 38.80416666666667 56.62708333333333L 38.80416666666667 65L 38.80416666666667 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3263)"
																			pathTo="M 30.695833333333333 65L 30.695833333333333 56.62708333333333Q 34.75 52.572916666666664 38.80416666666667 56.62708333333333L 38.80416666666667 56.62708333333333L 38.80416666666667 65L 38.80416666666667 65z"
																			pathFrom="M 30.695833333333333 65L 30.695833333333333 65L 38.80416666666667 65L 38.80416666666667 65L 38.80416666666667 65L 30.695833333333333 65"
																			cy="54.6" cx="53.8625" j="1" val="160"
																			barHeight="10.4"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3272"
																			d="M 53.8625 65L 53.8625 23.41208333333333Q 57.916666666666664 19.357916666666664 61.97083333333333 23.41208333333333L 61.97083333333333 23.41208333333333L 61.97083333333333 65L 61.97083333333333 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3273)"
																			pathTo="M 53.8625 65L 53.8625 23.41208333333333Q 57.916666666666664 19.357916666666664 61.97083333333333 23.41208333333333L 61.97083333333333 23.41208333333333L 61.97083333333333 65L 61.97083333333333 65z"
																			pathFrom="M 53.8625 65L 53.8625 65L 61.97083333333333 65L 61.97083333333333 65L 61.97083333333333 65L 53.8625 65"
																			cy="21.384999999999998"
																			cx="77.02916666666667" j="2" val="671"
																			barHeight="43.615"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3282"
																			d="M 77.02916666666667 65L 77.02916666666667 40.11708333333334Q 81.08333333333334 36.06291666666667 85.1375 40.11708333333334L 85.1375 40.11708333333334L 85.1375 65L 85.1375 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3283)"
																			pathTo="M 77.02916666666667 65L 77.02916666666667 40.11708333333334Q 81.08333333333334 36.06291666666667 85.1375 40.11708333333334L 85.1375 40.11708333333334L 85.1375 65L 85.1375 65z"
																			pathFrom="M 77.02916666666667 65L 77.02916666666667 65L 85.1375 65L 85.1375 65L 85.1375 65L 77.02916666666667 65"
																			cy="38.09" cx="100.19583333333334" j="3"
																			val="414" barHeight="26.91"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3292"
																			d="M 100.19583333333334 65L 100.19583333333334 30.952083333333338Q 104.25 26.89791666666667 108.30416666666667 30.952083333333338L 108.30416666666667 30.952083333333338L 108.30416666666667 65L 108.30416666666667 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3293)"
																			pathTo="M 100.19583333333334 65L 100.19583333333334 30.952083333333338Q 104.25 26.89791666666667 108.30416666666667 30.952083333333338L 108.30416666666667 30.952083333333338L 108.30416666666667 65L 108.30416666666667 65z"
																			pathFrom="M 100.19583333333334 65L 100.19583333333334 65L 108.30416666666667 65L 108.30416666666667 65L 108.30416666666667 65L 100.19583333333334 65"
																			cy="28.925000000000004"
																			cx="123.36250000000001" j="4" val="555"
																			barHeight="36.074999999999996"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3302"
																			d="M 123.36250000000001 65L 123.36250000000001 50.32208333333334Q 127.41666666666669 46.26791666666667 131.47083333333336 50.32208333333334L 131.47083333333336 50.32208333333334L 131.47083333333336 65L 131.47083333333336 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3303)"
																			pathTo="M 123.36250000000001 65L 123.36250000000001 50.32208333333334Q 127.41666666666669 46.26791666666667 131.47083333333336 50.32208333333334L 131.47083333333336 50.32208333333334L 131.47083333333336 65L 131.47083333333336 65z"
																			pathFrom="M 123.36250000000001 65L 123.36250000000001 65L 131.47083333333336 65L 131.47083333333336 65L 131.47083333333336 65L 123.36250000000001 65"
																			cy="48.295" cx="146.52916666666667" j="5"
																			val="257" barHeight="16.705"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3312"
																			d="M 146.52916666666667 65L 146.52916666666667 8.462083333333336Q 150.58333333333334 4.407916666666669 154.6375 8.462083333333336L 154.6375 8.462083333333336L 154.6375 65L 154.6375 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3313)"
																			pathTo="M 146.52916666666667 65L 146.52916666666667 8.462083333333336Q 150.58333333333334 4.407916666666669 154.6375 8.462083333333336L 154.6375 8.462083333333336L 154.6375 65L 154.6375 65z"
																			pathFrom="M 146.52916666666667 65L 146.52916666666667 65L 154.6375 65L 154.6375 65L 154.6375 65L 146.52916666666667 65"
																			cy="6.435000000000002"
																			cx="169.69583333333333" j="6" val="901"
																			barHeight="58.565"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3322"
																			d="M 169.69583333333333 65L 169.69583333333333 27.182083333333335Q 173.75 23.127916666666668 177.80416666666667 27.182083333333335L 177.80416666666667 27.182083333333335L 177.80416666666667 65L 177.80416666666667 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3323)"
																			pathTo="M 169.69583333333333 65L 169.69583333333333 27.182083333333335Q 173.75 23.127916666666668 177.80416666666667 27.182083333333335L 177.80416666666667 27.182083333333335L 177.80416666666667 65L 177.80416666666667 65z"
																			pathFrom="M 169.69583333333333 65L 169.69583333333333 65L 177.80416666666667 65L 177.80416666666667 65L 177.80416666666667 65L 169.69583333333333 65"
																			cy="25.155" cx="192.86249999999998" j="7"
																			val="613" barHeight="39.845"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3332"
																			d="M 192.86249999999998 65L 192.86249999999998 19.772083333333338Q 196.91666666666666 15.717916666666671 200.9708333333333 19.772083333333338L 200.9708333333333 19.772083333333338L 200.9708333333333 65L 200.9708333333333 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3333)"
																			pathTo="M 192.86249999999998 65L 192.86249999999998 19.772083333333338Q 196.91666666666666 15.717916666666671 200.9708333333333 19.772083333333338L 200.9708333333333 19.772083333333338L 200.9708333333333 65L 200.9708333333333 65z"
																			pathFrom="M 192.86249999999998 65L 192.86249999999998 65L 200.9708333333333 65L 200.9708333333333 65L 200.9708333333333 65L 192.86249999999998 65"
																			cy="17.745000000000005"
																			cx="216.02916666666664" j="8" val="727"
																			barHeight="47.254999999999995"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3342"
																			d="M 216.02916666666664 65L 216.02916666666664 40.11708333333334Q 220.08333333333331 36.06291666666667 224.1375 40.11708333333334L 224.1375 40.11708333333334L 224.1375 65L 224.1375 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3343)"
																			pathTo="M 216.02916666666664 65L 216.02916666666664 40.11708333333334Q 220.08333333333331 36.06291666666667 224.1375 40.11708333333334L 224.1375 40.11708333333334L 224.1375 65L 224.1375 65z"
																			pathFrom="M 216.02916666666664 65L 216.02916666666664 65L 224.1375 65L 224.1375 65L 224.1375 65L 216.02916666666664 65"
																			cy="38.09" cx="239.1958333333333" j="9"
																			val="414" barHeight="26.91"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3352"
																			d="M 239.1958333333333 65L 239.1958333333333 30.952083333333338Q 243.24999999999997 26.89791666666667 247.30416666666662 30.952083333333338L 247.30416666666662 30.952083333333338L 247.30416666666662 65L 247.30416666666662 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3353)"
																			pathTo="M 239.1958333333333 65L 239.1958333333333 30.952083333333338Q 243.24999999999997 26.89791666666667 247.30416666666662 30.952083333333338L 247.30416666666662 30.952083333333338L 247.30416666666662 65L 247.30416666666662 65z"
																			pathFrom="M 239.1958333333333 65L 239.1958333333333 65L 247.30416666666662 65L 247.30416666666662 65L 247.30416666666662 65L 239.1958333333333 65"
																			cy="28.925000000000004"
																			cx="262.36249999999995" j="10" val="555"
																			barHeight="36.074999999999996"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3362"
																			d="M 262.36249999999995 65L 262.36249999999995 50.32208333333334Q 266.41666666666663 46.26791666666667 270.4708333333333 50.32208333333334L 270.4708333333333 50.32208333333334L 270.4708333333333 65L 270.4708333333333 65z"
																			fill="rgba(244,17,39,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskc5t59j5k)"
																			filter="url(#SvgjsFilter3363)"
																			pathTo="M 262.36249999999995 65L 262.36249999999995 50.32208333333334Q 266.41666666666663 46.26791666666667 270.4708333333333 50.32208333333334L 270.4708333333333 50.32208333333334L 270.4708333333333 65L 270.4708333333333 65z"
																			pathFrom="M 262.36249999999995 65L 262.36249999999995 65L 270.4708333333333 65L 270.4708333333333 65L 270.4708333333333 65L 262.36249999999995 65"
																			cy="48.295" cx="285.52916666666664" j="11"
																			val="257" barHeight="16.705"
																			barWidth="8.108333333333334"></path>
																	</g>
																	<g id="SvgjsG3251" class="apexcharts-datalabels"
																		data:realIndex="0"></g>
																</g>
																<line id="SvgjsLine3386" x1="0" y1="0" x2="278" y2="0"
																	stroke="#b6b6b6" stroke-dasharray="0"
																	stroke-width="1" class="apexcharts-ycrosshairs">
																</line>
																<line id="SvgjsLine3387" x1="0" y1="0" x2="278" y2="0"
																	stroke-dasharray="0" stroke-width="0"
																	class="apexcharts-ycrosshairs-hidden"></line>
																<g id="SvgjsG3388" class="apexcharts-yaxis-annotations">
																</g>
																<g id="SvgjsG3389" class="apexcharts-xaxis-annotations">
																</g>
																<g id="SvgjsG3390" class="apexcharts-point-annotations">
																</g>
															</g>
															<g id="SvgjsG3374" class="apexcharts-yaxis" rel="0"
																transform="translate(-18, 0)"></g>
															<g id="SvgjsG3239" class="apexcharts-annotations"></g>
														</svg>
														<div class="apexcharts-legend"></div>
														<div class="apexcharts-tooltip apexcharts-theme-dark">
															<div class="apexcharts-tooltip-series-group"><span
																	class="apexcharts-tooltip-marker"
																	style="background-color: rgb(244, 17, 39);"></span>
																<div class="apexcharts-tooltip-text"
																	style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
																	<div class="apexcharts-tooltip-y-group"><span
																			class="apexcharts-tooltip-text-label"></span><span
																			class="apexcharts-tooltip-text-value"></span>
																	</div>
																	<div class="apexcharts-tooltip-z-group"><span
																			class="apexcharts-tooltip-text-z-label"></span><span
																			class="apexcharts-tooltip-text-z-value"></span>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
															<div class="apexcharts-yaxistooltip-text"></div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="card radius-10">
											<div class="card-body" style="position: relative;">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Giờ cao điểm của quán</p>
														<h5 class="mb-0">06:00 AM - 08:30 AM</h5>
													</div>
													<div class="dropdown ms-auto">
														<div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
															data-bs-toggle="dropdown"> <i
																class="bx bx-dots-horizontal-rounded font-22"></i>
														</div>

													</div>
												</div>
												<div class="" id="w-chart3" style="min-height: 65px;">
													<div id="apexchartsf4uqoq3w"
														class="apexcharts-canvas apexchartsf4uqoq3w apexcharts-theme-light"
														style="width: 278px; height: 65px;"><svg id="SvgjsSvg3392"
															width="278" height="65" xmlns="http://www.w3.org/2000/svg"
															version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
															xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
															xmlns:data="ApexChartsNS" transform="translate(0, 0)"
															style="background: transparent;">
															<g id="SvgjsG3394"
																class="apexcharts-inner apexcharts-graphical"
																transform="translate(0, 0)">
																<defs id="SvgjsDefs3393">
																	<clipPath id="gridRectMaskf4uqoq3w">
																		<rect id="SvgjsRect3399" width="284.4"
																			height="67.4" x="-3.2" y="-1.2" rx="0"
																			ry="0" opacity="1" stroke-width="0"
																			stroke="none" stroke-dasharray="0"
																			fill="#fff"></rect>
																	</clipPath>
																	<clipPath id="gridRectMarkerMaskf4uqoq3w">
																		<rect id="SvgjsRect3400" width="282" height="69"
																			x="-2" y="-2" rx="0" ry="0" opacity="1"
																			stroke-width="0" stroke="none"
																			stroke-dasharray="0" fill="#fff"></rect>
																	</clipPath>
																	<filter id="SvgjsFilter3407"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3408"
																			flood-color="#0d6efd" flood-opacity="0.12"
																			result="SvgjsFeFlood3408Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3409"
																			in="SvgjsFeFlood3408Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3409Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3410" dx="14" dy="3"
																			result="SvgjsFeOffset3410Out"
																			in="SvgjsFeComposite3409Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3411"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3411Out"
																			in="SvgjsFeOffset3410Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3412"
																			result="SvgjsFeMerge3412Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3413"
																				in="SvgjsFeGaussianBlur3411Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3414"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3415"
																			in="SourceGraphic" in2="SvgjsFeMerge3412Out"
																			mode="normal" result="SvgjsFeBlend3415Out">
																		</feBlend>
																	</filter>
																</defs>
																<line id="SvgjsLine3398" x1="252.22727272727275" y1="0"
																	x2="252.22727272727275" y2="65" stroke="#b6b6b6"
																	stroke-dasharray="3" class="apexcharts-xcrosshairs"
																	x="252.22727272727275" y="0" width="1" height="65"
																	fill="#b1b9c4" filter="none" fill-opacity="0.9"
																	stroke-width="1"></line>
																<g id="SvgjsG3416" class="apexcharts-xaxis"
																	transform="translate(0, 0)">
																	<g id="SvgjsG3417" class="apexcharts-xaxis-texts-g"
																		transform="translate(0, -4)"></g>
																</g>
																<g id="SvgjsG3419" class="apexcharts-grid">
																	<g id="SvgjsG3420"
																		class="apexcharts-gridlines-horizontal"
																		style="display: none;">
																		<line id="SvgjsLine3422" x1="0" y1="0" x2="278"
																			y2="0" stroke="#e0e0e0" stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3423" x1="0" y1="13" x2="278"
																			y2="13" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3424" x1="0" y1="26" x2="278"
																			y2="26" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3425" x1="0" y1="39" x2="278"
																			y2="39" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3426" x1="0" y1="52" x2="278"
																			y2="52" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3427" x1="0" y1="65" x2="278"
																			y2="65" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																	</g>
																	<g id="SvgjsG3421"
																		class="apexcharts-gridlines-vertical"
																		style="display: none;"></g>
																	<line id="SvgjsLine3429" x1="0" y1="65" x2="278"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																	<line id="SvgjsLine3428" x1="0" y1="1" x2="0"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																</g>
																<g id="SvgjsG3402"
																	class="apexcharts-line-series apexcharts-plot-series">
																	<g id="SvgjsG3403" class="apexcharts-series"
																		seriesName="AvgxxSessionxDuration"
																		data:longestSeries="true" rel="1"
																		data:realIndex="0">
																		<path id="SvgjsPath3406"
																			d="M 0 49.4C 8.845454545454546 49.4 16.42727272727273 54.6 25.272727272727273 54.6C 34.11818181818182 54.6 41.7 21.384999999999998 50.54545454545455 21.384999999999998C 59.39090909090909 21.384999999999998 66.97272727272728 38.09 75.81818181818183 38.09C 84.66363636363637 38.09 92.24545454545455 28.925000000000004 101.0909090909091 28.925000000000004C 109.93636363636364 28.925000000000004 117.51818181818183 48.295 126.36363636363637 48.295C 135.20909090909092 48.295 142.7909090909091 6.435000000000002 151.63636363636365 6.435000000000002C 160.4818181818182 6.435000000000002 168.0636363636364 25.155 176.90909090909093 25.155C 185.75454545454548 25.155 193.33636363636364 17.745000000000005 202.1818181818182 17.745000000000005C 211.02727272727273 17.745000000000005 218.60909090909092 38.09 227.45454545454547 38.09C 236.3 38.09 243.8818181818182 28.925000000000004 252.72727272727275 28.925000000000004C 261.57272727272726 28.925000000000004 269.1545454545455 48.295 278 48.295"
																			fill="none" fill-opacity="1"
																			stroke="rgba(13,110,253,1)"
																			stroke-opacity="1" stroke-linecap="butt"
																			stroke-width="2.4" stroke-dasharray="0"
																			class="apexcharts-line" index="0"
																			clip-path="url(#gridRectMaskf4uqoq3w)"
																			filter="url(#SvgjsFilter3407)"
																			pathTo="M 0 49.4C 8.845454545454546 49.4 16.42727272727273 54.6 25.272727272727273 54.6C 34.11818181818182 54.6 41.7 21.384999999999998 50.54545454545455 21.384999999999998C 59.39090909090909 21.384999999999998 66.97272727272728 38.09 75.81818181818183 38.09C 84.66363636363637 38.09 92.24545454545455 28.925000000000004 101.0909090909091 28.925000000000004C 109.93636363636364 28.925000000000004 117.51818181818183 48.295 126.36363636363637 48.295C 135.20909090909092 48.295 142.7909090909091 6.435000000000002 151.63636363636365 6.435000000000002C 160.4818181818182 6.435000000000002 168.0636363636364 25.155 176.90909090909093 25.155C 185.75454545454548 25.155 193.33636363636364 17.745000000000005 202.1818181818182 17.745000000000005C 211.02727272727273 17.745000000000005 218.60909090909092 38.09 227.45454545454547 38.09C 236.3 38.09 243.8818181818182 28.925000000000004 252.72727272727275 28.925000000000004C 261.57272727272726 28.925000000000004 269.1545454545455 48.295 278 48.295"
																			pathFrom="M -1 65L -1 65L 25.272727272727273 65L 50.54545454545455 65L 75.81818181818183 65L 101.0909090909091 65L 126.36363636363637 65L 151.63636363636365 65L 176.90909090909093 65L 202.1818181818182 65L 227.45454545454547 65L 252.72727272727275 65L 278 65">
																		</path>
																		<g id="SvgjsG3404"
																			class="apexcharts-series-markers-wrap"
																			data:realIndex="0">
																			<g class="apexcharts-series-markers">
																				<circle id="SvgjsCircle3435" r="0"
																					cx="252.72727272727275"
																					cy="28.925000000000004"
																					class="apexcharts-marker w2xb25j8l no-pointer-events"
																					stroke="#ffffff" fill="#0d6efd"
																					fill-opacity="1" stroke-width="2"
																					stroke-opacity="0.9"
																					default-marker-size="0"></circle>
																			</g>
																		</g>
																	</g>
																	<g id="SvgjsG3405" class="apexcharts-datalabels"
																		data:realIndex="0"></g>
																</g>
																<line id="SvgjsLine3430" x1="0" y1="0" x2="278" y2="0"
																	stroke="#b6b6b6" stroke-dasharray="0"
																	stroke-width="1" class="apexcharts-ycrosshairs">
																</line>
																<line id="SvgjsLine3431" x1="0" y1="0" x2="278" y2="0"
																	stroke-dasharray="0" stroke-width="0"
																	class="apexcharts-ycrosshairs-hidden"></line>
																<g id="SvgjsG3432" class="apexcharts-yaxis-annotations">
																</g>
																<g id="SvgjsG3433" class="apexcharts-xaxis-annotations">
																</g>
																<g id="SvgjsG3434" class="apexcharts-point-annotations">
																</g>
															</g>
															<rect id="SvgjsRect3397" width="0" height="0" x="0" y="0"
																rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
																stroke-dasharray="0" fill="#fefefe"></rect>
															<g id="SvgjsG3418" class="apexcharts-yaxis" rel="0"
																transform="translate(-18, 0)"></g>
															<g id="SvgjsG3395" class="apexcharts-annotations"></g>
														</svg>
														<div class="apexcharts-legend"></div>
														<div class="apexcharts-tooltip apexcharts-theme-dark"
															style="left: 196.202px; top: 32.425px;">
															<div class="apexcharts-tooltip-series-group apexcharts-active"
																style="display: flex;"><span
																	class="apexcharts-tooltip-marker"
																	style="background-color: rgb(13, 110, 253); display: none;"></span>
																<div class="apexcharts-tooltip-text"
																	style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
																	<div class="apexcharts-tooltip-y-group"><span
																			class="apexcharts-tooltip-text-label"></span><span
																			class="apexcharts-tooltip-text-value"></span>
																	</div>
																	<div class="apexcharts-tooltip-z-group"><span
																			class="apexcharts-tooltip-text-z-label"></span><span
																			class="apexcharts-tooltip-text-z-value"></span>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
															<div class="apexcharts-yaxistooltip-text"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card radius-10">
											<div class="card-body" style="position: relative;">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Tỷ lệ thoát</p>
														<h5 class="mb-0">51.46%</h5>
													</div>
													<div class="dropdown ms-auto">
														<div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
															data-bs-toggle="dropdown"> <i
																class="bx bx-dots-horizontal-rounded font-22"></i>
														</div>

													</div>
												</div>
												<div class="" id="w-chart4" style="min-height: 65px;">
													<div id="apexchartszylhzvf4"
														class="apexcharts-canvas apexchartszylhzvf4 apexcharts-theme-light"
														style="width: 278px; height: 65px;"><svg id="SvgjsSvg3436"
															width="278" height="65" xmlns="http://www.w3.org/2000/svg"
															version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
															xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
															xmlns:data="ApexChartsNS" transform="translate(0, 0)"
															style="background: transparent;">
															<g id="SvgjsG3438"
																class="apexcharts-inner apexcharts-graphical"
																transform="translate(0, 0)">
																<defs id="SvgjsDefs3437">
																	<linearGradient id="SvgjsLinearGradient3441" x1="0"
																		y1="0" x2="0" y2="1">
																		<stop id="SvgjsStop3442" stop-opacity="0.4"
																			stop-color="rgba(216,227,240,0.4)"
																			offset="0"></stop>
																		<stop id="SvgjsStop3443" stop-opacity="0.5"
																			stop-color="rgba(190,209,230,0.5)"
																			offset="1"></stop>
																		<stop id="SvgjsStop3444" stop-opacity="0.5"
																			stop-color="rgba(190,209,230,0.5)"
																			offset="1"></stop>
																	</linearGradient>
																	<clipPath id="gridRectMaskzylhzvf4">
																		<rect id="SvgjsRect3446" width="282" height="65"
																			x="-2" y="0" rx="0" ry="0" opacity="1"
																			stroke-width="0" stroke="none"
																			stroke-dasharray="0" fill="#fff"></rect>
																	</clipPath>
																	<clipPath id="gridRectMarkerMaskzylhzvf4">
																		<rect id="SvgjsRect3447" width="282" height="69"
																			x="-2" y="-2" rx="0" ry="0" opacity="1"
																			stroke-width="0" stroke="none"
																			stroke-dasharray="0" fill="#fff"></rect>
																	</clipPath>
																	<filter id="SvgjsFilter3453"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3454"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3454Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3455"
																			in="SvgjsFeFlood3454Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3455Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3456" dx="14" dy="3"
																			result="SvgjsFeOffset3456Out"
																			in="SvgjsFeComposite3455Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3457"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3457Out"
																			in="SvgjsFeOffset3456Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3458"
																			result="SvgjsFeMerge3458Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3459"
																				in="SvgjsFeGaussianBlur3457Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3460"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3461"
																			in="SourceGraphic" in2="SvgjsFeMerge3458Out"
																			mode="normal" result="SvgjsFeBlend3461Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3463"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3464"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3464Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3465"
																			in="SvgjsFeFlood3464Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3465Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3466" dx="14" dy="3"
																			result="SvgjsFeOffset3466Out"
																			in="SvgjsFeComposite3465Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3467"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3467Out"
																			in="SvgjsFeOffset3466Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3468"
																			result="SvgjsFeMerge3468Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3469"
																				in="SvgjsFeGaussianBlur3467Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3470"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3471"
																			in="SourceGraphic" in2="SvgjsFeMerge3468Out"
																			mode="normal" result="SvgjsFeBlend3471Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3473"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3474"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3474Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3475"
																			in="SvgjsFeFlood3474Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3475Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3476" dx="14" dy="3"
																			result="SvgjsFeOffset3476Out"
																			in="SvgjsFeComposite3475Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3477"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3477Out"
																			in="SvgjsFeOffset3476Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3478"
																			result="SvgjsFeMerge3478Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3479"
																				in="SvgjsFeGaussianBlur3477Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3480"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3481"
																			in="SourceGraphic" in2="SvgjsFeMerge3478Out"
																			mode="normal" result="SvgjsFeBlend3481Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3493"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3494"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3494Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3495"
																			in="SvgjsFeFlood3494Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3495Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3496" dx="14" dy="3"
																			result="SvgjsFeOffset3496Out"
																			in="SvgjsFeComposite3495Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3497"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3497Out"
																			in="SvgjsFeOffset3496Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3498"
																			result="SvgjsFeMerge3498Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3499"
																				in="SvgjsFeGaussianBlur3497Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3500"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3501"
																			in="SourceGraphic" in2="SvgjsFeMerge3498Out"
																			mode="normal" result="SvgjsFeBlend3501Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3503"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3504"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3504Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3505"
																			in="SvgjsFeFlood3504Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3505Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3506" dx="14" dy="3"
																			result="SvgjsFeOffset3506Out"
																			in="SvgjsFeComposite3505Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3507"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3507Out"
																			in="SvgjsFeOffset3506Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3508"
																			result="SvgjsFeMerge3508Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3509"
																				in="SvgjsFeGaussianBlur3507Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3510"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3511"
																			in="SourceGraphic" in2="SvgjsFeMerge3508Out"
																			mode="normal" result="SvgjsFeBlend3511Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3513"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3514"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3514Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3515"
																			in="SvgjsFeFlood3514Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3515Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3516" dx="14" dy="3"
																			result="SvgjsFeOffset3516Out"
																			in="SvgjsFeComposite3515Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3517"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3517Out"
																			in="SvgjsFeOffset3516Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3518"
																			result="SvgjsFeMerge3518Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3519"
																				in="SvgjsFeGaussianBlur3517Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3520"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3521"
																			in="SourceGraphic" in2="SvgjsFeMerge3518Out"
																			mode="normal" result="SvgjsFeBlend3521Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3543"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3544"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3544Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3545"
																			in="SvgjsFeFlood3544Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3545Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3546" dx="14" dy="3"
																			result="SvgjsFeOffset3546Out"
																			in="SvgjsFeComposite3545Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3547"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3547Out"
																			in="SvgjsFeOffset3546Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3548"
																			result="SvgjsFeMerge3548Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3549"
																				in="SvgjsFeGaussianBlur3547Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3550"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3551"
																			in="SourceGraphic" in2="SvgjsFeMerge3548Out"
																			mode="normal" result="SvgjsFeBlend3551Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3553"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3554"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3554Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3555"
																			in="SvgjsFeFlood3554Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3555Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3556" dx="14" dy="3"
																			result="SvgjsFeOffset3556Out"
																			in="SvgjsFeComposite3555Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3557"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3557Out"
																			in="SvgjsFeOffset3556Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3558"
																			result="SvgjsFeMerge3558Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3559"
																				in="SvgjsFeGaussianBlur3557Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3560"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3561"
																			in="SourceGraphic" in2="SvgjsFeMerge3558Out"
																			mode="normal" result="SvgjsFeBlend3561Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3563"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3564"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3564Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3565"
																			in="SvgjsFeFlood3564Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3565Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3566" dx="14" dy="3"
																			result="SvgjsFeOffset3566Out"
																			in="SvgjsFeComposite3565Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3567"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3567Out"
																			in="SvgjsFeOffset3566Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3568"
																			result="SvgjsFeMerge3568Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3569"
																				in="SvgjsFeGaussianBlur3567Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3570"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3571"
																			in="SourceGraphic" in2="SvgjsFeMerge3568Out"
																			mode="normal" result="SvgjsFeBlend3571Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3843"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3844"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3844Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3845"
																			in="SvgjsFeFlood3844Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3845Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3846" dx="14" dy="3"
																			result="SvgjsFeOffset3846Out"
																			in="SvgjsFeComposite3845Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3847"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3847Out"
																			in="SvgjsFeOffset3846Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3848"
																			result="SvgjsFeMerge3848Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3849"
																				in="SvgjsFeGaussianBlur3847Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3850"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3851"
																			in="SourceGraphic" in2="SvgjsFeMerge3848Out"
																			mode="normal" result="SvgjsFeBlend3851Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3868"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3869"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3869Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3870"
																			in="SvgjsFeFlood3869Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3870Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3871" dx="14" dy="3"
																			result="SvgjsFeOffset3871Out"
																			in="SvgjsFeComposite3870Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3872"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3872Out"
																			in="SvgjsFeOffset3871Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3873"
																			result="SvgjsFeMerge3873Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3874"
																				in="SvgjsFeGaussianBlur3872Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3875"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3876"
																			in="SourceGraphic" in2="SvgjsFeMerge3873Out"
																			mode="normal" result="SvgjsFeBlend3876Out">
																		</feBlend>
																	</filter>
																	<filter id="SvgjsFilter3893"
																		filterUnits="userSpaceOnUse" width="200%"
																		height="200%" x="-50%" y="-50%">
																		<feFlood id="SvgjsFeFlood3894"
																			flood-color="#ffb207" flood-opacity="0.12"
																			result="SvgjsFeFlood3894Out"
																			in="SourceGraphic"></feFlood>
																		<feComposite id="SvgjsFeComposite3895"
																			in="SvgjsFeFlood3894Out" in2="SourceAlpha"
																			operator="in"
																			result="SvgjsFeComposite3895Out">
																		</feComposite>
																		<feOffset id="SvgjsFeOffset3896" dx="14" dy="3"
																			result="SvgjsFeOffset3896Out"
																			in="SvgjsFeComposite3895Out"></feOffset>
																		<feGaussianBlur id="SvgjsFeGaussianBlur3897"
																			stdDeviation="4 "
																			result="SvgjsFeGaussianBlur3897Out"
																			in="SvgjsFeOffset3896Out"></feGaussianBlur>
																		<feMerge id="SvgjsFeMerge3898"
																			result="SvgjsFeMerge3898Out"
																			in="SourceGraphic">
																			<feMergeNode id="SvgjsFeMergeNode3899"
																				in="SvgjsFeGaussianBlur3897Out">
																			</feMergeNode>
																			<feMergeNode id="SvgjsFeMergeNode3900"
																				in="[object Arguments]"></feMergeNode>
																		</feMerge>
																		<feBlend id="SvgjsFeBlend3901"
																			in="SourceGraphic" in2="SvgjsFeMerge3898Out"
																			mode="normal" result="SvgjsFeBlend3901Out">
																		</feBlend>
																	</filter>
																</defs>
																<rect id="SvgjsRect3445" width="8.108333333333334"
																	height="65" x="76.83331724802653" y="0" rx="0"
																	ry="0" opacity="1" stroke-width="0"
																	stroke-dasharray="3"
																	fill="url(#SvgjsLinearGradient3441)"
																	class="apexcharts-xcrosshairs" y2="65" filter="none"
																	fill-opacity="0.9" x1="76.83331724802653"
																	x2="76.83331724802653"></rect>
																<g id="SvgjsG3572" class="apexcharts-xaxis"
																	transform="translate(0, 0)">
																	<g id="SvgjsG3573" class="apexcharts-xaxis-texts-g"
																		transform="translate(0, -4)"></g>
																</g>
																<g id="SvgjsG3575" class="apexcharts-grid">
																	<g id="SvgjsG3576"
																		class="apexcharts-gridlines-horizontal"
																		style="display: none;">
																		<line id="SvgjsLine3578" x1="0" y1="0" x2="278"
																			y2="0" stroke="#e0e0e0" stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3579" x1="0" y1="13" x2="278"
																			y2="13" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3580" x1="0" y1="26" x2="278"
																			y2="26" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3581" x1="0" y1="39" x2="278"
																			y2="39" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3582" x1="0" y1="52" x2="278"
																			y2="52" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																		<line id="SvgjsLine3583" x1="0" y1="65" x2="278"
																			y2="65" stroke="#e0e0e0"
																			stroke-dasharray="0"
																			class="apexcharts-gridline"></line>
																	</g>
																	<g id="SvgjsG3577"
																		class="apexcharts-gridlines-vertical"
																		style="display: none;"></g>
																	<line id="SvgjsLine3585" x1="0" y1="65" x2="278"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																	<line id="SvgjsLine3584" x1="0" y1="1" x2="0"
																		y2="65" stroke="transparent"
																		stroke-dasharray="0"></line>
																</g>
																<g id="SvgjsG3449"
																	class="apexcharts-bar-series apexcharts-plot-series">
																	<g id="SvgjsG3450" class="apexcharts-series" rel="1"
																		seriesName="BouncexRate" data:realIndex="0">
																		<path id="SvgjsPath3452"
																			d="M 7.529166666666667 65L 7.529166666666667 51.42708333333333Q 11.583333333333334 47.37291666666666 15.637500000000001 51.42708333333333L 15.637500000000001 51.42708333333333L 15.637500000000001 65L 15.637500000000001 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3453)"
																			pathTo="M 7.529166666666667 65L 7.529166666666667 51.42708333333333Q 11.583333333333334 47.37291666666666 15.637500000000001 51.42708333333333L 15.637500000000001 51.42708333333333L 15.637500000000001 65L 15.637500000000001 65z"
																			pathFrom="M 7.529166666666667 65L 7.529166666666667 65L 15.637500000000001 65L 15.637500000000001 65L 15.637500000000001 65L 7.529166666666667 65"
																			cy="49.4" cx="30.695833333333333" j="0"
																			val="240" barHeight="15.6"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3462"
																			d="M 30.695833333333333 65L 30.695833333333333 56.62708333333333Q 34.75 52.572916666666664 38.80416666666667 56.62708333333333L 38.80416666666667 56.62708333333333L 38.80416666666667 65L 38.80416666666667 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3463)"
																			pathTo="M 30.695833333333333 65L 30.695833333333333 56.62708333333333Q 34.75 52.572916666666664 38.80416666666667 56.62708333333333L 38.80416666666667 56.62708333333333L 38.80416666666667 65L 38.80416666666667 65z"
																			pathFrom="M 30.695833333333333 65L 30.695833333333333 65L 38.80416666666667 65L 38.80416666666667 65L 38.80416666666667 65L 30.695833333333333 65"
																			cy="54.6" cx="53.8625" j="1" val="160"
																			barHeight="10.4"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3472"
																			d="M 53.8625 65L 53.8625 23.41208333333333Q 57.916666666666664 19.357916666666664 61.97083333333333 23.41208333333333L 61.97083333333333 23.41208333333333L 61.97083333333333 65L 61.97083333333333 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3473)"
																			pathTo="M 53.8625 65L 53.8625 23.41208333333333Q 57.916666666666664 19.357916666666664 61.97083333333333 23.41208333333333L 61.97083333333333 23.41208333333333L 61.97083333333333 65L 61.97083333333333 65z"
																			pathFrom="M 53.8625 65L 53.8625 65L 61.97083333333333 65L 61.97083333333333 65L 61.97083333333333 65L 53.8625 65"
																			cy="21.384999999999998"
																			cx="77.02916666666667" j="2" val="671"
																			barHeight="43.615"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3482"
																			d="M 77.02916666666667 65L 77.02916666666667 40.11708333333334Q 81.08333333333334 36.06291666666667 85.1375 40.11708333333334L 85.1375 40.11708333333334L 85.1375 65L 85.1375 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			pathTo="M 77.02916666666667 65L 77.02916666666667 40.11708333333334Q 81.08333333333334 36.06291666666667 85.1375 40.11708333333334L 85.1375 40.11708333333334L 85.1375 65L 85.1375 65z"
																			pathFrom="M 77.02916666666667 65L 77.02916666666667 65L 85.1375 65L 85.1375 65L 85.1375 65L 77.02916666666667 65"
																			cy="38.09" cx="100.19583333333334" j="3"
																			val="414" barHeight="26.91"
																			barWidth="8.108333333333334"
																			filter="url(#SvgjsFilter3893)"></path>
																		<path id="SvgjsPath3492"
																			d="M 100.19583333333334 65L 100.19583333333334 30.952083333333338Q 104.25 26.89791666666667 108.30416666666667 30.952083333333338L 108.30416666666667 30.952083333333338L 108.30416666666667 65L 108.30416666666667 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3493)"
																			pathTo="M 100.19583333333334 65L 100.19583333333334 30.952083333333338Q 104.25 26.89791666666667 108.30416666666667 30.952083333333338L 108.30416666666667 30.952083333333338L 108.30416666666667 65L 108.30416666666667 65z"
																			pathFrom="M 100.19583333333334 65L 100.19583333333334 65L 108.30416666666667 65L 108.30416666666667 65L 108.30416666666667 65L 100.19583333333334 65"
																			cy="28.925000000000004"
																			cx="123.36250000000001" j="4" val="555"
																			barHeight="36.074999999999996"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3502"
																			d="M 123.36250000000001 65L 123.36250000000001 50.32208333333334Q 127.41666666666669 46.26791666666667 131.47083333333336 50.32208333333334L 131.47083333333336 50.32208333333334L 131.47083333333336 65L 131.47083333333336 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3503)"
																			pathTo="M 123.36250000000001 65L 123.36250000000001 50.32208333333334Q 127.41666666666669 46.26791666666667 131.47083333333336 50.32208333333334L 131.47083333333336 50.32208333333334L 131.47083333333336 65L 131.47083333333336 65z"
																			pathFrom="M 123.36250000000001 65L 123.36250000000001 65L 131.47083333333336 65L 131.47083333333336 65L 131.47083333333336 65L 123.36250000000001 65"
																			cy="48.295" cx="146.52916666666667" j="5"
																			val="257" barHeight="16.705"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3512"
																			d="M 146.52916666666667 65L 146.52916666666667 8.462083333333336Q 150.58333333333334 4.407916666666669 154.6375 8.462083333333336L 154.6375 8.462083333333336L 154.6375 65L 154.6375 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3513)"
																			pathTo="M 146.52916666666667 65L 146.52916666666667 8.462083333333336Q 150.58333333333334 4.407916666666669 154.6375 8.462083333333336L 154.6375 8.462083333333336L 154.6375 65L 154.6375 65z"
																			pathFrom="M 146.52916666666667 65L 146.52916666666667 65L 154.6375 65L 154.6375 65L 154.6375 65L 146.52916666666667 65"
																			cy="6.435000000000002"
																			cx="169.69583333333333" j="6" val="901"
																			barHeight="58.565"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3522"
																			d="M 169.69583333333333 65L 169.69583333333333 27.182083333333335Q 173.75 23.127916666666668 177.80416666666667 27.182083333333335L 177.80416666666667 27.182083333333335L 177.80416666666667 65L 177.80416666666667 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			pathTo="M 169.69583333333333 65L 169.69583333333333 27.182083333333335Q 173.75 23.127916666666668 177.80416666666667 27.182083333333335L 177.80416666666667 27.182083333333335L 177.80416666666667 65L 177.80416666666667 65z"
																			pathFrom="M 169.69583333333333 65L 169.69583333333333 65L 177.80416666666667 65L 177.80416666666667 65L 177.80416666666667 65L 169.69583333333333 65"
																			cy="25.155" cx="192.86249999999998" j="7"
																			val="613" barHeight="39.845"
																			barWidth="8.108333333333334"
																			filter="url(#SvgjsFilter3868)"></path>
																		<path id="SvgjsPath3532"
																			d="M 192.86249999999998 65L 192.86249999999998 19.772083333333338Q 196.91666666666666 15.717916666666671 200.9708333333333 19.772083333333338L 200.9708333333333 19.772083333333338L 200.9708333333333 65L 200.9708333333333 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			pathTo="M 192.86249999999998 65L 192.86249999999998 19.772083333333338Q 196.91666666666666 15.717916666666671 200.9708333333333 19.772083333333338L 200.9708333333333 19.772083333333338L 200.9708333333333 65L 200.9708333333333 65z"
																			pathFrom="M 192.86249999999998 65L 192.86249999999998 65L 200.9708333333333 65L 200.9708333333333 65L 200.9708333333333 65L 192.86249999999998 65"
																			cy="17.745000000000005"
																			cx="216.02916666666664" j="8" val="727"
																			barHeight="47.254999999999995"
																			barWidth="8.108333333333334"
																			filter="url(#SvgjsFilter3843)"></path>
																		<path id="SvgjsPath3542"
																			d="M 216.02916666666664 65L 216.02916666666664 40.11708333333334Q 220.08333333333331 36.06291666666667 224.1375 40.11708333333334L 224.1375 40.11708333333334L 224.1375 65L 224.1375 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3543)"
																			pathTo="M 216.02916666666664 65L 216.02916666666664 40.11708333333334Q 220.08333333333331 36.06291666666667 224.1375 40.11708333333334L 224.1375 40.11708333333334L 224.1375 65L 224.1375 65z"
																			pathFrom="M 216.02916666666664 65L 216.02916666666664 65L 224.1375 65L 224.1375 65L 224.1375 65L 216.02916666666664 65"
																			cy="38.09" cx="239.1958333333333" j="9"
																			val="414" barHeight="26.91"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3552"
																			d="M 239.1958333333333 65L 239.1958333333333 30.952083333333338Q 243.24999999999997 26.89791666666667 247.30416666666662 30.952083333333338L 247.30416666666662 30.952083333333338L 247.30416666666662 65L 247.30416666666662 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3553)"
																			pathTo="M 239.1958333333333 65L 239.1958333333333 30.952083333333338Q 243.24999999999997 26.89791666666667 247.30416666666662 30.952083333333338L 247.30416666666662 30.952083333333338L 247.30416666666662 65L 247.30416666666662 65z"
																			pathFrom="M 239.1958333333333 65L 239.1958333333333 65L 247.30416666666662 65L 247.30416666666662 65L 247.30416666666662 65L 239.1958333333333 65"
																			cy="28.925000000000004"
																			cx="262.36249999999995" j="10" val="555"
																			barHeight="36.074999999999996"
																			barWidth="8.108333333333334"></path>
																		<path id="SvgjsPath3562"
																			d="M 262.36249999999995 65L 262.36249999999995 50.32208333333334Q 266.41666666666663 46.26791666666667 270.4708333333333 50.32208333333334L 270.4708333333333 50.32208333333334L 270.4708333333333 65L 270.4708333333333 65z"
																			fill="rgba(255,178,7,1)" fill-opacity="1"
																			stroke-opacity="1" stroke-linecap="square"
																			stroke-width="0" stroke-dasharray="0"
																			class="apexcharts-bar-area" index="0"
																			clip-path="url(#gridRectMaskzylhzvf4)"
																			filter="url(#SvgjsFilter3563)"
																			pathTo="M 262.36249999999995 65L 262.36249999999995 50.32208333333334Q 266.41666666666663 46.26791666666667 270.4708333333333 50.32208333333334L 270.4708333333333 50.32208333333334L 270.4708333333333 65L 270.4708333333333 65z"
																			pathFrom="M 262.36249999999995 65L 262.36249999999995 65L 270.4708333333333 65L 270.4708333333333 65L 270.4708333333333 65L 262.36249999999995 65"
																			cy="48.295" cx="285.52916666666664" j="11"
																			val="257" barHeight="16.705"
																			barWidth="8.108333333333334"></path>
																	</g>
																	<g id="SvgjsG3451" class="apexcharts-datalabels"
																		data:realIndex="0"></g>
																</g>
																<line id="SvgjsLine3586" x1="0" y1="0" x2="278" y2="0"
																	stroke="#b6b6b6" stroke-dasharray="0"
																	stroke-width="1" class="apexcharts-ycrosshairs">
																</line>
																<line id="SvgjsLine3587" x1="0" y1="0" x2="278" y2="0"
																	stroke-dasharray="0" stroke-width="0"
																	class="apexcharts-ycrosshairs-hidden"></line>
																<g id="SvgjsG3588" class="apexcharts-yaxis-annotations">
																</g>
																<g id="SvgjsG3589" class="apexcharts-xaxis-annotations">
																</g>
																<g id="SvgjsG3590" class="apexcharts-point-annotations">
																</g>
															</g>
															<g id="SvgjsG3574" class="apexcharts-yaxis" rel="0"
																transform="translate(-18, 0)"></g>
															<g id="SvgjsG3439" class="apexcharts-annotations"></g>
														</svg>
														<div class="apexcharts-legend"></div>
														<div class="apexcharts-tooltip apexcharts-theme-dark"
															style="left: 80.8875px; top: 32px;">
															<div class="apexcharts-tooltip-series-group apexcharts-active"
																style="display: flex;"><span
																	class="apexcharts-tooltip-marker"
																	style="background-color: rgb(255, 178, 7); display: none;"></span>
																<div class="apexcharts-tooltip-text"
																	style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
																	<div class="apexcharts-tooltip-y-group"><span
																			class="apexcharts-tooltip-text-label"></span><span
																			class="apexcharts-tooltip-text-value"></span>
																	</div>
																	<div class="apexcharts-tooltip-z-group"><span
																			class="apexcharts-tooltip-text-z-label"></span><span
																			class="apexcharts-tooltip-text-z-value"></span>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
															<div class="apexcharts-yaxistooltip-text"></div>
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



			</div>
			<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
					class='bx bxs-up-arrow-alt'></i></a>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="assets/admin/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/admin/js/jquery.min.js"></script>
	<script src="assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/admin/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/admin/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="assets/admin/js/index.js"></script>
	<!--app JS-->
	<script src="assets/admin/js/app.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const x = localStorage.getItem("login")
			if (!x) {
				return window.location.href = "pagesAdmin/login"
			}
		});

		function logout() {
			localStorage.removeItem('login')
			return window.location.href = "pagesAdmin/login"
		}
	</script>
</body>

</html>
