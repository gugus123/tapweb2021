<?php
    require 'function.php';
    require 'login/cek.php';
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Dashboard Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<!-- Bootstrap Css -->
	<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
	<!-- <body data-layout="horizontal" data-topbar="colored"> -->
	<!-- Begin page -->
	<div id="layout-wrapper">
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="index.php" class="logo logo-dark">
							<span class="logo-sm">
								<img src="assets/images/avatar.svg" alt="" height="22">
							</span>
							<span class="logo-lg">
								<img src="assets/images/logo-dark.png" alt="" height="20">
							</span>
						</a>
						<a href="index.php" class="logo logo-light">
							<span class="logo-sm">
								<img src="assets/images/avatar.svg" alt="" height="22">
							</span>
							<span class="logo-lg">
								<img src="assets/images/logo-light.png" alt="" height="20">
							</span>
						</a>
					</div>
					<button type="button"
						class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i
							class="fa fa-fw fa-bars"></i> </button>
					<!-- App Search-->
					<form class="app-search d-none d-lg-block">
						<div class="position-relative">
							<input type="text" class="form-control" placeholder="Search..."> <span
								class="uil-search"></span> </div>
					</form>
				</div>
				<div class="d-flex">
					<div class="dropdown d-inline-block d-lg-none ms-2">
						<button type="button" class="btn header-item noti-icon waves-effect"
							id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false"> <i class="uil-search"></i> </button>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
							aria-labelledby="page-header-search-dropdown">
							<form class="p-3">
								<div class="m-0">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search ..."
											aria-label="Recipient's username">
										<div class="input-group-append">
											<button class="btn btn-primary" type="submit"><i
													class="mdi mdi-magnify"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="dropdown d-none d-lg-inline-block ms-1">
						<button type="button" class="btn header-item noti-icon waves-effect"
							data-bs-toggle="fullscreen"> 
							<i class="fas fa-expand-arrows-alt"></i>
						</button>
					</div>
					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-bell"></i>
							<span class="badge bg-danger rounded-pill">3</span> 
						</button>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
							<div class="p-3">
								<div class="row align-items-center">
									<div class="col">
										<h5 class="m-0 font-size-16"> Notifications </h5>
									</div>
									<div class="col-auto"> 
										<a href="#!" class="small"> Mark all as read</a> 
									</div>
								</div>
							</div>
							<div data-simplebar style="max-height: 230px;">
								<a href="" class="text-reset notification-item">
									<div class="d-flex align-items-start">
										<div class="flex-shrink-0 me-3">
											<div class="avatar-xs"> <span
													class="avatar-title bg-primary rounded-circle font-size-16">
													<i class="uil-shopping-basket"></i>
												</span> </div>
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-1">Your order is placed</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1">If several languages coalesce the grammar</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="text-reset notification-item">
									<div class="d-flex align-items-start">
										<div class="flex-shrink-0 me-3"> <img src="assets/images/users/avatar.svg"
												class="rounded-circle avatar-xs" alt="user-pic"> </div>
										<div class="flex-grow-1">
											<h6 class="mb-1">James Lemire</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1">It will seem like simplified English.</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="text-reset notification-item">
									<div class="d-flex align-items-start">
										<div class="flex-shrink-0 me-3">
											<div class="avatar-xs"> <span
													class="avatar-title bg-success rounded-circle font-size-16">
													<i class="uil-truck"></i>
												</span> </div>
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-1">Your item is shipped</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1">If several languages coalesce the grammar</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="text-reset notification-item">
									<div class="d-flex align-items-start">
										<div class="flex-shrink-0 me-3"> <img src="assets/images/users/avatar.svg"
												class="rounded-circle avatar-xs" alt="user-pic"> </div>
										<div class="flex-grow-1">
											<h6 class="mb-1">Salena Layfield</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="p-2 border-top">
								<div class="d-grid">
									<a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
										<i class="uil-arrow-circle-right me-1"></i> View More.. </a>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
							data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
								class="rounded-circle header-profile-user" src="assets/images/users/avatar.svg"
								alt="Header Avatar"> <span
								class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Lalu Gugus</span> <i
								class="uil-angle-down d-none d-xl-inline-block font-size-15"></i> </button>
						<div class="dropdown-menu dropdown-menu-end">
							<!-- item-->
							<a class="dropdown-item" href="#">
								<i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i>
								<span class="align-middle">View Profile</span>
							</a>
							<a class="dropdown-item" href="#">
								<i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i>
								<span class="align-middle">My Wallet</span>
							</a>
							<a class="dropdown-item d-block" href="#">
								<i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i>
								<span class="align-middle">Settings</span>
								<span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span>
							</a>
							<a class="dropdown-item" href="#">
								<i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i>
								<span class="align-middle">Lock screen</span>
							</a>
							<a class="dropdown-item" href="login/logout.php"
								onClick="alert('Apakah anda ingin keluar?')">
								<i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
								<span class="align-middle">Sign out</span>
							</a>
						</div>
					</div>
					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"> <i
								class="uil-cog"></i> </button>
					</div>
				</div>
			</div>
		</header>
		<!-- ========== Left Sidebar Start ========== -->
		<div class="vertical-menu">
			<!-- LOGO -->
			<div class="navbar-brand-box">
				<a href="index.php" class="logo logo-dark"> <span class="logo-sm">
						<img src="assets/images/avatar.svg" alt="" height="22">
					</span> <span class="logo-lg">
						<img src="assets/images/logo-dark.png" alt="" height="20">
					</span> </a>
				<a href="index.php" class="logo logo-light"> <span class="logo-sm">
						<img src="assets/images/logo-sm.png" alt="" height="22">
					</span> <span class="logo-lg">
						<img src="assets/images/logo-light.png" alt="" height="20">
					</span> </a>
			</div>
			<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i
					class="fa fa-fw fa-bars"></i> </button>
			<div data-simplebar class="sidebar-menu-scroll">
				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title">Menu</li>
						<li>
							<a href="index.php"> 
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="badge rounded-pill bg-primary float-end">01</span> 
                                <span>Dashboard</span> 
                            </a>
						</li>
						
						<li class="menu-title">Barang</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> 
                            <i class="fas fa-table"></i>
                                <span>Stok Barang</span> 
                            </a>
							<ul class="sub-menu" aria-expanded="false">
								
								<li><a href="data_barang.php">Data Barang</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> <i class="fas fa-chart-pie"></i>  <span>Barang Masuk</span> </a>
							<ul class="sub-menu" aria-expanded="false">
								<li><a href="barang-masuk.php">Data Barang Masuk</a></li>
								<li><a href="add-masuk.php">Tambah Barang Masuk</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> <i class="fas fa-chart-pie"></i> <span>Barang Keluar</span> </a>
							<ul class="sub-menu" aria-expanded="false">
								<li><a href="barang-keluar.php">Data Barang Keluar</a></li>
								<li><a href="add-keluar.php">Tambah Barang Keluar</a></li>
							</ul>
						</li>
						
						<li class="menu-title">User</li>
						<li>
							<a href="data_user.php"> <i class="fas fa-user"></i><span class="badge rounded-pill bg-primary float-end">20</span> <span>Data User</span> </a>							
						</li>
					</ul>
				</div>
				<!-- Sidebar -->
			</div>
		</div>
		<!-- Left Sidebar End -->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">
					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box d-flex align-items-center justify-content-between">
								<h4 class="mb-0">Dashboard</h4>
								<div class="page-title-right">
									<ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard Admin</a></li>
										<li class="breadcrumb-item active">Dashboard</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<!-- Card Info -->
					<div class="row">
						<div class="col-md-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="float-end mt-2">
										<div id="total-revenue-chart"></div>
									</div>
									<div>
										<h4 class="mb-1 mt-1"><span data-plugin="counterup">7</span></h4>
										<p class="text-muted mb-0">Admin Aktif</p>
									</div>
									
								</div>
							</div>
						</div>
						<!-- end col-->
						<div class="col-md-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="float-end mt-2">
										<div id="orders-chart"> </div>
									</div>
									<div>
										<h4 class="mb-1 mt-1"><span data-plugin="counterup">2300</span></h4>
										<p class="text-muted mb-0">Total Stok</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end col-->
						<div class="col-md-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="float-end mt-2">
										<div id="customers-chart"> </div>
									</div>
									<div>
										<h4 class="mb-1 mt-1"><span data-plugin="counterup">100</span></h4>
										<p class="text-muted mb-0">Barang Masuk</p>
									</div> 
								</div>
							</div>
						</div>
						<!-- end col-->
						<div class="col-md-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="float-end mt-2">
										<div id="growth-chart"></div>
									</div>
									<div>
										<h4 class="mb-1 mt-1">+ <span data-plugin="counterup">212</span>%</h4>
										<p class="text-muted mb-0">Barang Keluar</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end col-->
					</div>
					<!--end row-->

					<!-- Start Table Data -->
					<!-- end row -->
					<!-- end row -->
					<!-- <div class="row"> 
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-4">Latest Transaction</h4>
									<div class="table-responsive">
										<table class="table table-centered table-nowrap mb-0">
											<thead class="table-light">
												<tr>
													<th style="width: 20px;">
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck1">
															<label class="form-check-label"
																for="customCheck1">&nbsp;</label>
														</div>
													</th>
													<th>Order ID</th>
													<th>Billing Name</th>
													<th>Date</th>
													<th>Total</th>
													<th>Payment Status</th>
													<th>Payment Method</th>
													<th>View Details</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck2">
															<label class="form-check-label"
																for="customCheck2">&nbsp;</label>
														</div>
													</td>
													<td><a href="javascript: void(0);"
															class="text-body fw-bold">#MB2540</a> </td>
													<td>Neal Matthews</td>
													<td> 07 Oct, 2019 </td>
													<td> $400 </td>
													<td> <span
															class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
													</td>
													<td> <i class="fab fa-cc-mastercard me-1"></i> Mastercard </td>
													<td>
														<button type="button"
															class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
															View Details </button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck3">
															<label class="form-check-label"
																for="customCheck3">&nbsp;</label>
														</div>
													</td>
													<td><a href="javascript: void(0);"
															class="text-body fw-bold">#MB2541</a> </td>
													<td>Jamal Burnett</td>
													<td> 07 Oct, 2019 </td>
													<td> $380 </td>
													<td> <span
															class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
													</td>
													<td> <i class="fab fa-cc-visa me-1"></i> Visa </td>
													<td>
														<button type="button"
															class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
															View Details </button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck4">
															<label class="form-check-label"
																for="customCheck4">&nbsp;</label>
														</div>
													</td>
													<td><a href="javascript: void(0);"
															class="text-body fw-bold">#MB2542</a> </td>
													<td>Juan Mitchell</td>
													<td> 06 Oct, 2019 </td>
													<td> $384 </td>
													<td> <span
															class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
													</td>
													<td> <i class="fab fa-cc-paypal me-1"></i> Paypal </td>
													<td>
														<button type="button"
															class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
															View Details </button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck5">
															<label class="form-check-label"
																for="customCheck5">&nbsp;</label>
														</div>
													</td>
													<td><a href="javascript: void(0);"
															class="text-body fw-bold">#MB2543</a> </td>
													<td>Barry Dick</td>
													<td> 05 Oct, 2019 </td>
													<td> $412 </td>
													<td> <span
															class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
													</td>
													<td> <i class="fab fa-cc-mastercard me-1"></i> Mastercard </td>
													<td>
														<button type="button"
															class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
															View Details </button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck6">
															<label class="form-check-label"
																for="customCheck6">&nbsp;</label>
														</div>
													</td>
													<td><a href="javascript: void(0);"
															class="text-body fw-bold">#MB2544</a> </td>
													<td>Ronald Taylor</td>
													<td> 04 Oct, 2019 </td>
													<td> $404 </td>
													<td> <span
															class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
													</td>
													<td> <i class="fab fa-cc-visa me-1"></i> Visa </td>
													<td>
														<button type="button"
															class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
															View Details </button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check font-size-16">
															<input type="checkbox" class="form-check-input"
																id="customCheck7">
															<label class="form-check-label"
																for="customCheck7">&nbsp;</label>
														</div>
													</td>
													<td><a href="javascript: void(0);"
															class="text-body fw-bold">#MB2545</a> </td>
													<td>Jacob Hunter</td>
													<td> 04 Oct, 2019 </td>
													<td> $392 </td>
													<td> <span
															class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
													</td>
													<td> <i class="fab fa-cc-paypal me-1"></i> Paypal </td>
													<td>
														<button type="button"
															class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
															View Details </button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- end table-responsive -->
								</div>
							</div>
						</div>
					<!-- </div> --> -->
					<!-- end row -->



				</div>
				<!-- container-fluid -->
			</div>
			<!-- End Page-content -->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<script>
								document.write(new Date().getFullYear())
							</script> Copyright &copy; Tugas Akhir Lalu Gugus 1800018090
						</div>
						<div class="col-sm-6">
							<div class="text-sm-end d-none d-sm-block"> Crafted with <i
									class="mdi mdi-heart text-danger"></i> by <a href="https://www.instagram.com/lalu.rhmn/"
									target="_blank" class="text-reset">Lalu Gugus</a> </div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- end main content-->
	</div>
	<!-- END layout-wrapper -->


	<!-- Right Sidebar -->
	<div class="right-bar">
		<div data-simplebar class="h-100">
			<div class="rightbar-title d-flex align-items-center px-3 py-4">
				<h5 class="m-0 me-2">Settings</h5>
				<a href="javascript:void(0);" class="right-bar-toggle ms-auto"> <i class="mdi mdi-close noti-icon"></i>
				</a>
			</div>
			<!-- Settings -->
			<hr class="mt-0" />
			<h6 class="text-center mb-0">Choose Layouts</h6>
			<div class="p-4">
				<div class="mb-2"> <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail"
						alt="layout images"> </div>
				<div class="form-check form-switch mb-3">
					<input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
					<label class="form-check-label" for="light-mode-switch">Light Mode</label>
				</div>
				<div class="mb-2"> <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail"
						alt="layout images"> </div>
				<div class="form-check form-switch mb-3">
					<input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" />
					<label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
				</div>
				<div class="mb-2"> <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail"
						alt="layout images"> </div>
				<div class="form-check form-switch mb-3">
					<input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" />
					<label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
				</div>
				<div class="mb-2"> <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail"
						alt="layout images"> </div>
				<div class="form-check form-switch mb-5">
					<input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
					<label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
				</div>
			</div>
		</div>
		<!-- end slimscroll-menu-->
	</div>
	<!-- /Right-bar -->
	<!-- Right bar overlay-->
	<div class="rightbar-overlay"></div>
	<!-- JAVASCRIPT -->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="assets/libs/simplebar/simplebar.min.js"></script>
	<script src="assets/libs/node-waves/waves.min.js"></script>
	<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- apexcharts -->
	<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
	<script src="assets/js/pages/dashboard.init.js"></script>
	<!-- App js -->
	<script src="assets/js/app.js"></script>
</body>

</html>