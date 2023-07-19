<!DOCTYPE html>
<!--
* CoreUI PRO Bootstrap Admin Template
* @version v4.2.0
* @link https://coreui.io/pro/
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->
<html lang="en">

<head>
	<base href="https://coreui.io/demos/bootstrap/4.3/light-v3/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="CoreUI - Bootstrap Admin Template">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">
	<title>CoreUI Bootstrap Admin Template</title>
	<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Vendors styles-->
	<link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
	<link rel="stylesheet" href="css/vendors/simplebar.css">
	<!-- Main styles for this application-->
	<link href="css/style.css" rel="stylesheet">
	<!-- We use those styles to show code examples, you should remove them in your application.-->
	<link href="css/examples.css" rel="stylesheet">
</head>

<body>
	<div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="card-group d-block d-md-flex row">
						<div class="card col-md-7 p-4 mb-0">
							<form action="<?= getMyUrl().$_SERVER["REQUEST_URI"] ?>/index.php" method="post">
								<div class="card-body">
									<h1>Login</h1>
									<p class="text-medium-emphasis">Sign In to your account</p>
									<div class="input-group mb-3"><span class="input-group-text">
											<svg class="icon">
												<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
											</svg></span>
										<input class="form-control" type="text" name="username" placeholder="Username">
									</div>
									<div class="input-group mb-4"><span class="input-group-text">
											<svg class="icon">
												<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
											</svg></span>
										<input class="form-control" type="password" name="password" placeholder="Password">
									</div>
									<div class="row">
										<div class="col-6">
											<button class="btn btn-primary px-4" type="submit">Login</button>
										</div>
										<div class="col-6 text-end">
											<button class="btn btn-link px-0" type="button">Forgot password?</button>
										</div>
									</div>
									

		<?php
		error_reporting(0);
		include_once("koneksi.php");
		

		if ($_POST["username"] != "") {

			$user = $_POST["username"];
			$pass = $_POST["password"];

			if ($user != "" && $pass != "") {
				include_once("koneksi.php");
				$em = mysqli_query($kon, "select * from admin where password = '$pass' AND username = '$user'");
				$data = mysqli_fetch_assoc($em);

				if ($data["username"] == $user && $data["password"] == $pass) {
					echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
					$_SESSION["useradmin"] = $data["username"];
					$_SESSION["passadmin"] = $data["password"];
					$_SESSION["nmadmin"] = $data["nm_lengkap"];


					echo "<script>window.location.href='". getMyUrl().$_SERVER["REQUEST_URI"] . "/index.php'</script>";
				} else {
					echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data Tidak Ditemukan!!</b>
                  </div><center>";
				}
			}
		}
		?>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CoreUI and necessary plugins-->
	<script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
	<script src="vendors/simplebar/js/simplebar.min.js"></script>
	<script>
		if (document.body.classList.contains('dark-theme')) {
			var element = document.getElementById('btn-dark-theme');
			if (typeof(element) != 'undefined' && element != null) {
				document.getElementById('btn-dark-theme').checked = true;
			}
		} else {
			var element = document.getElementById('btn-light-theme');
			if (typeof(element) != 'undefined' && element != null) {
				document.getElementById('btn-light-theme').checked = true;
			}
		}

		function handleThemeChange(src) {
			var event = document.createEvent('Event');
			event.initEvent('themeChange', true, true);

			if (src.value === 'light') {
				document.body.classList.remove('dark-theme');
			}
			if (src.value === 'dark') {
				document.body.classList.add('dark-theme');
			}
			document.body.dispatchEvent(event);
		}
	</script>
	<script>
	</script>

</body>

</html>
