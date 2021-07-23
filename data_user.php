<<<<<<< HEAD
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Data User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
                        <a href="index.php" class="logo logo-dark"> <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span> <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                            </span> </a>
                        <a href="index.php" class="logo logo-light"> <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span> <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span> </a>
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
                            data-bs-toggle="fullscreen"> <i class="uil-minus-path"></i> </button>
                    </div>
                    
                    
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                class="rounded-circle header-profile-user" src="assets/images/users/avatar.svg"
                                alt="Header Avatar"> <span
                                class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Admin</span> <i
                                class="uil-angle-down d-none d-xl-inline-block font-size-15"></i> </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item--><a class="dropdown-item" href="#"><i
                                    class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                    class="align-middle">View Profile</span></a> <a class="dropdown-item" href="#"><i
                                    class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">My Wallet</span></a> <a class="dropdown-item d-block"
                                href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Settings</span> <span
                                    class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a> <a
                                class="dropdown-item" href="#"><i
                                    class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Lock screen</span></a> <a class="dropdown-item" href="#"><i
                                    class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Sign out</span></a> </div>
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
                                <span>Stok Barang</span> </a>
							<ul class="sub-menu" aria-expanded="false">
								
								<li><a href="data_barang.php">Data Barang</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> 
                            <i class="fas fa-chart-pie"></i>
                                <span>Barang Masuk</span> 
                            </a>
							<ul class="sub-menu" aria-expanded="false">
								<li><a href="barang-masuk.php">Data Barang Masuk</a></li>
								<li><a href="add-masuk.php">Tambah Barang Masuk</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> 
                                <i class="fas fa-chart-pie"></i> 
                                <span>Barang Keluar</span> 
                            </a>
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
                                <h4 class="mb-0">Data User</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                        <li class="breadcrumb-item Admin">Data User</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Mulai Konten -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div>
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-3"
                                        data-toggle="modal" data-target="#myModal">
                                        <i class="mdi mdi-plus me-1"></i>Tambah User
                                    </button>
                                </div>
                                <div class="table-responsive mb-4">
                                    <table class="table table-centered datatable dt-responsive nowrap table-card-list"
                                        style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                        <thead>
                                            <tr class="bg-transparent">
                                                <th style="width: 20px;">
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck">
                                                        <label class="form-check-label" for="customercheck"></label>
                                                    </div>
                                                </th>
                                                <th style="width: 120px;">ID</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Join Date</th>
                                                <th>Status</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck1">
                                                        <label class="form-check-label" for="customercheck1"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0123</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>William
                                                        Shipp</span> </td>
                                                <td>WilliamShipp@jourrapide.com</td>
                                                <td> 14 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck2">
                                                        <label class="form-check-label" for="customercheck2"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            J
                                                        </span> </div> <span>Joe Hardy</span>
                                                </td>
                                                <td>JoeHardy@dayrep.com</td>
                                                <td> 14 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm w-xs waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck3">
                                                        <label class="form-check-label" for="customercheck3"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0121</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar.svg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Thomas
                                                        Hankins</span> </td>
                                                <td>ThomasHankins@dayrep.com</td>
                                                <td> 13 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck4">
                                                        <label class="form-check-label" for="customercheck4"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0120</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar.svg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Mary Frazier</span>
                                                </td>
                                                <td>MaryFrazier@armyspy.com</td>
                                                <td> 12 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck5">
                                                        <label class="form-check-label" for="customercheck5"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0119</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            S
                                                        </span> </div> <span>Sam Perry</span>
                                                </td>
                                                <td>SamPerry@rhyta.com</td>
                                                <td> 12 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck6">
                                                        <label class="form-check-label" for="customercheck6"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0118</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Muriel Myers</span>
                                                </td>
                                                <td>MurielMyers@rhyta.com</td>
                                                <td> 09 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck7">
                                                        <label class="form-check-label" for="customercheck7"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0117</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            J
                                                        </span> </div> <span>Jessie Jacobs</span>
                                                </td>
                                                <td>JessieJacobs@teleworm.us</td>
                                                <td> 09 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck8">
                                                        <label class="form-check-label" for="customercheck8"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0116</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Edward King</span>
                                                </td>
                                                <td>EdwardKing@teleworm.us</td>
                                                <td> 08 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck9">
                                                        <label class="form-check-label" for="customercheck9"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0115</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Stacy
                                                        Webster</span> </td>
                                                <td>StacyWebster@armyspy.com</td>
                                                <td> 07 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck10">
                                                        <label class="form-check-label" for="customercheck10"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0114</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            A
                                                        </span> </div> <span>Amy McDonald</span>
                                                </td>
                                                <td>AmyMcDonald@jourrapide.com</td>
                                                <td> 05 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck11">
                                                        <label class="form-check-label" for="customercheck11"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0113</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            T
                                                        </span> </div> <span>Terry Brown</span>
                                                </td>
                                                <td>TerryBrown@dayrep.com</td>
                                                <td> 02 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck12">
                                                        <label class="form-check-label" for="customercheck12"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0112</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Crissy
                                                        Holland</span> </td>
                                                <td>CrissyHolland@armyspy.com</td>
                                                <td> 23 Mar, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck12">
                                                        <label class="form-check-label" for="customercheck12"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0112</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Crissy
                                                        Holland</span> </td>
                                                <td>CrissyHolland@armyspy.com</td>
                                                <td> 23 Mar, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://www.instagram.com/lalu.rhmn/" target="_blank" class="text-reset">Lalu
                                    Gugus</a> </div>
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
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/ecommerce-datatables.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

=======
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Data User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
                        <a href="index.php" class="logo logo-dark"> <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span> <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                            </span> </a>
                        <a href="index.php" class="logo logo-light"> <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span> <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span> </a>
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
                            data-bs-toggle="fullscreen"> <i class="uil-minus-path"></i> </button>
                    </div>
                    
                    
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                class="rounded-circle header-profile-user" src="assets/images/users/avatar.svg"
                                alt="Header Avatar"> <span
                                class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Admin</span> <i
                                class="uil-angle-down d-none d-xl-inline-block font-size-15"></i> </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item--><a class="dropdown-item" href="#"><i
                                    class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                    class="align-middle">View Profile</span></a> <a class="dropdown-item" href="#"><i
                                    class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">My Wallet</span></a> <a class="dropdown-item d-block"
                                href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Settings</span> <span
                                    class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a> <a
                                class="dropdown-item" href="#"><i
                                    class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Lock screen</span></a> <a class="dropdown-item" href="#"><i
                                    class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Sign out</span></a> </div>
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
                                <span>Stok Barang</span> </a>
							<ul class="sub-menu" aria-expanded="false">
								
								<li><a href="data_barang.php">Data Barang</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> 
                            <i class="fas fa-chart-pie"></i>
                                <span>Barang Masuk</span> 
                            </a>
							<ul class="sub-menu" aria-expanded="false">
								<li><a href="barang-masuk.php">Data Barang Masuk</a></li>
								<li><a href="add-masuk.php">Tambah Barang Masuk</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"> 
                                <i class="fas fa-chart-pie"></i> 
                                <span>Barang Keluar</span> 
                            </a>
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
                                <h4 class="mb-0">Data User</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                        <li class="breadcrumb-item Admin">Data User</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Mulai Konten -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div>
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-3"
                                        data-toggle="modal" data-target="#myModal">
                                        <i class="mdi mdi-plus me-1"></i>Tambah User
                                    </button>
                                </div>
                                <div class="table-responsive mb-4">
                                    <table class="table table-centered datatable dt-responsive nowrap table-card-list"
                                        style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                        <thead>
                                            <tr class="bg-transparent">
                                                <th style="width: 20px;">
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck">
                                                        <label class="form-check-label" for="customercheck"></label>
                                                    </div>
                                                </th>
                                                <th style="width: 120px;">ID</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Join Date</th>
                                                <th>Status</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck1">
                                                        <label class="form-check-label" for="customercheck1"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0123</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>William
                                                        Shipp</span> </td>
                                                <td>WilliamShipp@jourrapide.com</td>
                                                <td> 14 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck2">
                                                        <label class="form-check-label" for="customercheck2"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            J
                                                        </span> </div> <span>Joe Hardy</span>
                                                </td>
                                                <td>JoeHardy@dayrep.com</td>
                                                <td> 14 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm w-xs waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck3">
                                                        <label class="form-check-label" for="customercheck3"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0121</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar.svg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Thomas
                                                        Hankins</span> </td>
                                                <td>ThomasHankins@dayrep.com</td>
                                                <td> 13 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck4">
                                                        <label class="form-check-label" for="customercheck4"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0120</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar.svg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Mary Frazier</span>
                                                </td>
                                                <td>MaryFrazier@armyspy.com</td>
                                                <td> 12 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck5">
                                                        <label class="form-check-label" for="customercheck5"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0119</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            S
                                                        </span> </div> <span>Sam Perry</span>
                                                </td>
                                                <td>SamPerry@rhyta.com</td>
                                                <td> 12 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck6">
                                                        <label class="form-check-label" for="customercheck6"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0118</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Muriel Myers</span>
                                                </td>
                                                <td>MurielMyers@rhyta.com</td>
                                                <td> 09 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck7">
                                                        <label class="form-check-label" for="customercheck7"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0117</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            J
                                                        </span> </div> <span>Jessie Jacobs</span>
                                                </td>
                                                <td>JessieJacobs@teleworm.us</td>
                                                <td> 09 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck8">
                                                        <label class="form-check-label" for="customercheck8"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0116</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Edward King</span>
                                                </td>
                                                <td>EdwardKing@teleworm.us</td>
                                                <td> 08 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck9">
                                                        <label class="form-check-label" for="customercheck9"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0115</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Stacy
                                                        Webster</span> </td>
                                                <td>StacyWebster@armyspy.com</td>
                                                <td> 07 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck10">
                                                        <label class="form-check-label" for="customercheck10"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0114</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            A
                                                        </span> </div> <span>Amy McDonald</span>
                                                </td>
                                                <td>AmyMcDonald@jourrapide.com</td>
                                                <td> 05 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck11">
                                                        <label class="form-check-label" for="customercheck11"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0113</a>
                                                </td>
                                                <td>
                                                    <div class="avatar-xs d-inline-block me-2"> <span
                                                            class="avatar-title rounded-circle bg-light text-body">
                                                            T
                                                        </span> </div> <span>Terry Brown</span>
                                                </td>
                                                <td>TerryBrown@dayrep.com</td>
                                                <td> 02 Apr, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-12">Admin</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck12">
                                                        <label class="form-check-label" for="customercheck12"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0112</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Crissy
                                                        Holland</span> </td>
                                                <td>CrissyHolland@armyspy.com</td>
                                                <td> 23 Mar, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check text-center">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck12">
                                                        <label class="form-check-label" for="customercheck12"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0112</a>
                                                </td>
                                                <td> <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="avatar-xs rounded-circle me-2"> <span>Crissy
                                                        Holland</span> </td>
                                                <td>CrissyHolland@armyspy.com</td>
                                                <td> 23 Mar, 2020 </td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-danger font-size-12">User
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary">
                                                        <button type="button"
                                                            class="btn btn-primary w-xs btn-sm waves-effect waves-light">Edit</button>
                                                    </a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm w-xs waves-effect waves-light">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://www.instagram.com/lalu.rhmn/" target="_blank" class="text-reset">Lalu
                                    Gugus</a> </div>
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
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/ecommerce-datatables.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

>>>>>>> ec02fbc49b70533ea3e75476608304568d14fc35
</html>