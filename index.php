<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Arisan Online</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Arisan Online" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					<div class="row border-bottom py-lg-4 py-3">
						<div class="col-xl-7 col-lg-6 header_agileits_left">
							<ul>
								<li class="mr-3">
									<i class="fas fa-phone mr-2"></i>+62 858-5230-0217</li>
								<li>
									<i class="fas fa-envelope mr-2"></i>
									<a href="mailto:arisanonline@gmail.com">arisanonline@gmail.com</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-5 col-lg-6 header_right text-center mt-lg-0 mt-2">
							<div class="row">
								<!-- social icons -->
								<div class="col-4 w3social-icons">
									<ul>
										<li>
											<a href="#" class="rounded-circle">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="px-2">
											<a href="#" class="rounded-circle">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" class="rounded-circle">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li class="pl-2">
											<a href="#" class="rounded-circle">
												<i class="fab fa-dribbble"></i>
											</a>
										</li>
									</ul>
								</div>
								<!-- //social icons -->
								<div class="col-4 header-loginw3ls text-lg-right text-center">
									<a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter1">
										<i class="fas fa-user mr-2"></i> Login</a>
								</div>
								<div class="col-4 header-loginw3ls">
									<a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter2">
										<i class="fas fa-key mr-2"></i> Register</a>
								</div>
							</div>
						</div>
					</div>
					<!--// header-top -->

					<!-- navigation -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">Arisan Online
							<span>Social Gathering</span>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="?page=about">About Us</a>
								</li>

								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="?page=galery">Galery</a>
								</li>

								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="?page=berita">Berita</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="?page=contact">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>
					<!-- //navigation -->
				</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner text -->
		<div class="banner-text-agile">
			<div class="container">
				<div class="banner-w3lstexts text-white text-center">
					<h1>Arisan Online </h1>
					<h4 class="text-uppercase mt-md-3 mt-2 mb-md-4 mb-3">Social Gathering</h4>
					<p class="text-white">Arisan bukan lagi suatu kegiatan untuk ibu rumah tangga, tapi semakin merambah sampai ke kalangan dunia perkantoran hingga kaum sosialita. Arisan merupakan kegiatan mengumpulkan uang atau barang yang bernilai sama oleh beberapa orang kemudian diundi di antara mereka untuk menentukan siapa yang memperolehnya.
					</p>
				</div>
			</div>
		</div>
		<!-- //banner text -->
	</div>
	<!-- login -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form role="form" action="proses_login.php" method="POST">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="ussername" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>
							<input type="submit" class="btn btn-primary submit mb-4" value="Login" name="login">
							<p class="text-center pb-4">
								Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
	<?php
	include "koneksi.php";
	?>
	<!-- register -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Daftar Member Arisan</h5>
						<form method="POST" name="sentMessage" role="form">
							<div class="form-group">
								<label> Name</label>
								<input type="text" class="form-control" name="nama_member" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>No Hendpon</label>
								<input type="text" class="form-control" name="no_hp" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Umur</label>
								<input type="text" class="form-control" name="umur" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Tanggal Regis</label>
								<input type="text" class="form-control" name="tgl_regis" placeholder="" required="">
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Username</label>
								<input type="password" class="form-control" name="ussername" id="ussername" placeholder="" required="">
							</div>
							<div class="form-group">
								<label> Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="" required="">
							</div>
							<div class="form-group">
								<label> Ulangi Password</label>
								<input type="password" class="form-control" name="password2" id="password2" placeholder="" required="">
							</div>
							<input type="submit" value="Register" class="btn btn-primary submit mb-4" name="simpan">
							<p class="text-center pb-4">
								<a href="#">By clicking Register, I agree to your terms</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//register-->
	<?php
	if (isset($_POST['simpan'])) {

		$nama_member = $_POST['nama_member'];
		$no_hp = $_POST['no_hp'];
		$umur = $_POST['umur'];
		$tgl_regis = $_POST['tgl_regis'];
		$email = $_POST['email'];
		$ussername = $_POST['ussername'];
		$password = $_POST['password'];
		$foto_profil = $_POST['foto_profil'];
		$cekdata = mysqli_query($koneksi, "SELECT * FROM tb_regis WHERE ussername = '$ussername'");
		$arr = mysqli_fetch_array($cekdata);
		if (@count($arr) > 0) {
			echo "<script>alert('Data username sudah ada! Silahkan masukan username lain');
    window.location ='?page=register';
    </script>";
		} else {
			mysqli_query($koneksi, "INSERT INTO tb_regis VALUES ('','$nama_member','$no_hp','$umur','$tgl_regis','$email','$ussername','$password','$foto_profil')");
			echo "<script>alert('Data Udah Di Simpan');
    window.location ='index.php';
    </script>";
		}
	}
	?>
	<!-- //banner -->

	<?php include "page.php"; ?>


	<!-- footer top -->
	<div class="footer-top py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<h2 class="text-white mb-4">Mari ikut Arisan Online</h2>
			<h5 class="text-white mb-sm-5 mb-4 pb-sm-5 pb-4">Hubungi Kami</h5>
			<i class="fas fa-map-marker-alt"></i>
		</div>
	</div>
	<!-- //footer top -->

	<!-- footer -->
	<div class="footer py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<div class="address row mb-4">
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-envelope"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<p>
								<a href="mailto:arisanonline@gmail.com">arisanonline@gmail.com</a>
							</p>	
						</div>

					</div>
				</div>
				<div class="col-lg-4 address-grid my-lg-0 my-4">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">call us</h6>
							<p>+62 858-5230-0217</p>
							<p>+62 857-8542-1632</p>
							<p>+62 881-5097-496</p>
							<p>+62 822-5720-2767</p>
							<p>+62 859-3137-1624</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-map"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Address</h6>
							<p> Universitas Trunojoyo Madura</p>
							<p> Jl. Raya Telang, PO BOX 02 Kecamatan Kamal, Bangkalan Jawa Timur 69162 Indonesia</p>
						</div>
					</div>
				</div>
			</div>
			<!-- social icons footer -->
			<div class="w3social-icons-footer text-center pt-sm-5 pt-3">
				<ul>
					<li>
						<a href="#" class="rounded-circle">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="px-2">
						<a href="#" class="rounded-circle">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" class="rounded-circle">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="px-2">
						<a href="#" class="rounded-circle">
							<i class="fab fa-dribbble"></i>
						</a>
					</li>
					<li>
						<a href="#" class="rounded-circle">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
					<li class="px-2">
						<a href="#" class="rounded-circle">
							<i class="fab fa-behance"></i>
						</a>
					</li>
					<li class="">
						<a href="#" class="rounded-circle">
							<i class="fab fa-vimeo-v"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- //social icons footer -->
		</div>
	</div>
	<!-- footer -->

	<!-- copyright -->
	<div class="copy_right py-4 text-center">
		<p class="text-white">© 2022 Arisan Online . All rights reserved | Design by Kelompok 7 Financial Technology
		</p>
	</div>
	<!-- //copyright -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- password-script -->
	<script>
		window.onload = function() {
			document.getElementById("password").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/district.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->

	<a href="#" id="toTop">To Top</a><a href="#" id="toTop">To Top</a><img src="http://localhost/arisan/images/t1.jpg" alt="" style="display: none;"><img src="http://localhost/arisan/images/t2.jpg" alt="" style="display: none;"><img src="http://localhost/arisan/images/t3.jpg" alt="" style="display: none;"><img src="http://localhost/arisan/images/t4.jpg" alt="" style="display: none;">
</body>

</html>