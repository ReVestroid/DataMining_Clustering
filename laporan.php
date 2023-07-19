<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Data Mining</title>

	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				DATA MINING
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link" href="?">
					<span>1. Data Training</span></a>
				<a class="nav-link" href="?module=data_proses">
					<span>2. Pemilihan Centroid</span></a>
				<a class="nav-link" href="?module=hasil">
					<span>3. Data Processing</span></a>
				<a class="nav-link" href="?module=laporan">
					<span>4. Hasil Laporan</span></a>
			</li>


			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<form class="form-inline">
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>
					</form>

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!-- Counter - Alerts -->
								<span class="badge badge-danger badge-counter">3+</span>
							</a>
							<!-- Dropdown - Alerts -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
									Alerts Center
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-primary">
											<i class="fas fa-file-alt text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 12, 2019</div>
										<span class="font-weight-bold">A new monthly report is ready to download!</span>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-success">
											<i class="fas fa-donate text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 7, 2019</div>
										$290.29 has been deposited into your account!
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-warning">
											<i class="fas fa-exclamation-triangle text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 2, 2019</div>
										Spending Alert: We've noticed unusually high spending for your account.
									</div>
								</a>
								<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
							</div>
						</li>

						<!-- Nav Item - Messages -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-envelope fa-fw"></i>
								<!-- Counter - Messages -->
								<span class="badge badge-danger badge-counter">7</span>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
								<h6 class="dropdown-header">
									Message Center
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
										<div class="status-indicator bg-success"></div>
									</div>
									<div class="font-weight-bold">
										<div class="text-truncate">Hi there! I am wondering if you can help me with a
											problem I've been having.</div>
										<div class="small text-gray-500">Emily Fowler · 58m</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
										<div class="status-indicator"></div>
									</div>
									<div>
										<div class="text-truncate">I have the photos that you ordered last month, how
											would you like them sent to you?</div>
										<div class="small text-gray-500">Jae Chun · 1d</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
										<div class="status-indicator bg-warning"></div>
									</div>
									<div>
										<div class="text-truncate">Last month's report looks great, I am very happy with
											the progress so far, keep up the good work!</div>
										<div class="small text-gray-500">Morgan Alvarez · 2d</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
										<div class="status-indicator bg-success"></div>
									</div>
									<div>
										<div class="text-truncate">Am I a good boy? The reason I ask is because someone
											told me that people say this to all dogs, even if they aren't good...</div>
										<div class="small text-gray-500">Chicken the Dog · 2w</div>
									</div>
								</a>
								<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
							</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
								<img class="img-profile rounded-circle" src="img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">4. Laporan Hasil</h1>
					<p class="mb-4">Pada proses terakhir, aplikasi akan melakukan pelaporan dari hasil clustering</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Data Processing</h6>
						</div>
						<div class="card-body">

							<?php
							switch (@$_GET['act']) {
								default:
							?>

									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th rowspan=2>No</th>
													<th rowspan=2>Nama Buku</th>
													<th rowspan=2>Total Stok Buku</th>
													<th rowspan=2>Total Terpinjam</th>
													<th rowspan=2>C1</th>
													<th rowspan=2>C2</th>
													<th rowspan=2>C3</th>
													<th rowspan=2>Hasil</th>
												</tr>
											</thead>
											<tbody><?php
													$no = 1;
													$q = mysqli_query($kon, "select * from data order by id asc");
													$q_ = mysqli_fetch_array(mysqli_query($kon, "select * from hasil"));
													while ($r = mysqli_fetch_array($q)) {

													?>

												<?php
														echo "
											<tr>
												<td>$no</td>
												<td>$r[nmb]</td>
												<td>$r[stok]</td>
												<td>$r[pin]</td>";
														$c1 = json_decode($q_["c1"], true)[$no - 1];
														$c2 = json_decode($q_["c2"], true)[$no - 1];
														$c3 = json_decode($q_["c3"], true)[$no - 1];

														$min = min($c1, $c2, $c3);
														$no++;
														if ($c1 == $min) {
															$ketmin = "C1";
														} elseif ($c2 == $min) {
															$ketmin = "C2";
														} elseif ($c3 == $min) {
															$ketmin = "C3";
														}
														echo "<td>" . number_format($c1, 4) . "</td>
												<td>" . number_format($c2, 4) . "</td>
												<td>" . number_format($c3, 4) . "</td>
												<td>$ketmin</td>
											</tr>
											";
													}

												?>
											</tbody>
										</table>
									</div>
								<?php
									break;
								case "detail":
									$r = mysqli_fetch_array(mysqli_query($kon, "select * from data where id='$_GET[id]'"));

								?>
									<h2>Nama Buku <?php echo "$r[nmb]"; ?></h2>
									<h4>1. Pusat Cluster</h4>
									<?php
									echo 'Pusat Cluster 1 : {' . $_GET['x1'] . ',' . $_GET['y1'] . '}<br/>';
									echo 'Pusat Cluster 2 : {' . $_GET['x2'] . ',' . $_GET['y2'] . '}<br/>';
									echo 'Pusat Cluster 2 : {' . $_GET['x3'] . ',' . $_GET['y3'] . '}<br/>';
									?>
									<h4>2. Perhitungan Jarak Cluster</h4>
									<?php
									$c1 = sqrt((pow(($r['stok'] - $_GET['x1']), 2)) + (pow(($r['pin'] - $_GET['y1']), 2)));
									$c2 = sqrt((pow(($r['stok'] - $_GET['x2']), 2)) + (pow(($r['pin'] - $_GET['y2']), 2)));
									$c3 = sqrt((pow(($r['stok'] - $_GET['x3']), 2)) + (pow(($r['pin'] - $_GET['y3']), 2)));
									$min = 0;
									$min = min($c1, $c2, $c3);

									if ($c1 == $min) {
										$ketmin = "C1 (Sering Dipinjam)";
									} elseif ($c2 == $min) {
										$ketmin = "C2 (Lumayan Dipinjam)";
									} elseif ($c3 == $min) {
										$ketmin = "C3 (Jarang Dipinjam)";
									}

									echo "Jarak ke Cluseter 1 : D1 = sqrt((pow(($r[stok]-$_GET[x1]),2))+(pow(($r[pin]-$_GET[y1]),2))) = $c1<br/>";
									echo "Jarak ke Cluseter 2 : D2 = sqrt((pow(($r[stok]-$_GET[x2]),2))+(pow(($r[pin]-$_GET[y2]),2))) = $c2<br/>";
									echo "Jarak ke Cluseter 3 : D3 = sqrt((pow(($r[stok]-$_GET[x3]),2))+(pow(($r[pin]-$_GET[y3]),2))) = $c3<br/>";
									?>
									<h4>3. Hasil</h4>
							<?php
									echo "<b>$ketmin</b>";
							}
							?>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="js/demo/datatables-demo.js"></script>

</body>

</html>