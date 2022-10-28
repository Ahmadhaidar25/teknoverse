<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Teknoverse</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{url('template/assets/img/teknoverse_logo-removebg-preview.png')}}" rel="icon">
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{url('template/assets/vendor/aos/aos.css')}}" rel="stylesheet">
	<link href="{{url('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{url('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<link href="{{url('template/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{url('template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{url('template/assets/css/style.css')}}" rel="stylesheet">

	<style type="text/css">
		.preloader {

			position: fixed;

			top: 0;

			left: 0;

			width: 100%;

			height: 100%;

			z-index: 9999;

			background-color: #fff;

		}
		.preloader .loading {

			position: absolute;

			left: 50%;

			top: 50%;

			transform: translate(-50%, -50%);

			font: 14px arial;

		}


		#text{
			color: black;
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			font-family: "Arial Black";
			font-size: 30px;
		}

		.spinner {
			display: none;
		}
	</style>

</head>

<body>
	<div class="preloader">

		<div class="loading">
			<div class="spinner-grow text-light" style="width: 5rem; height: 5rem;" role="status">
				<img src="{{url('template/assets/img/teknoverse_logo.png')}}" alt="" class="img-fluid" style="width: 80px;">
			</div>

			<p>Harap tunggu..</p>
		</div>

	</div> 
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top" style="background: #0CA8B4;">
		<div class="container d-flex align-items-center justify-content-between">
			<img src="{{url('template/assets/img/logo.png')}}" alt="" class="img-fluid" style="width: 70px;">
			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="index.html" class="logo"></a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">Home</a></li>
					<li><a class="nav-link scrollto {{ request()->is('about') ? 'active' : '' }}" href="{{url('about')}}">About</a></li>
					<li><a class="nav-link scrollto {{ request()->is('service') ? 'active' : '' }}" href="{{url('service')}}">Services</a></li>
					<li><a class="nav-link scrollto {{ request()->is('visi-misi') ? 'active' : '' }}" href="{{url('visi-misi')}}">Vision And Mision</a></li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Ecosystem
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="#">
							Controll Network Architecture</a></li>
							<li><a class="dropdown-item" href="#">
								Manufacturing Ecosystem Architecture
							</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto {{ request()->is('client') ? 'active' : '' }}" href="{{url('client')}}">Client</a></li>
					<li><a class="nav-link scrollto {{ request()->is('articel') ? 'active' : '' }}" href="{{url('articel')}}">Articel</a></li>
					<li><a class="nav-link scrollto {{ request()->is('berita') ? 'active' : '' }}" href="{{url('berita')}}">News</a></li>
				</ul>

				<i class="bi bi-list mobile-nav-toggle"></i>
				
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	

	<main id="main">
		@yield('content')
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" style="background: #0CA8B4;">



		<div class="container">
			<center>
				<div class="copyright-wrap d-md-flex py-4">

					<div class="me-md-auto text-center text-md-start">
						<div class="copyright text-center">
							&copy; Copyright <strong><span>Teknoverse</span></strong>.&nbsp;<script>document.write(new Date().getFullYear()); </script>

						</div>
					</div>

				<!--<div class="social-links text-center text-md-right pt-3 pt-md-0">
					<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
					<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
					<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>-->
			</div>
		</center>

	</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background: #0CA8B4;">
	<i class="bi bi-arrow-up-short"></i></a>


	<!-- Vendor JS Files -->
	<script src="{{url('template/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
	<script src="{{url('template/assets/vendor/aos/aos.js')}}"></script>
	<script src="{{url('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{url('template/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{url('template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{url('template/assets/vendor/php-email-form/validate.js')}}"></script>

	<!-- Template Main JS File -->
	<script src="{{url('template/assets/js/main.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$(".preloader").fadeOut(1000);

		})

		var i=0,text;
		text = "PT Tekno Digital Nusantara"

		function ketik() {
			if(i<text.length){
				document.getElementById("text").innerHTML += text.charAt(i);
				i++;
				setTimeout(ketik,900);
			}
		}
		ketik();


		(function () {
			$('.form').on('submit', function () {
				$('.button-prevent').attr('disabled', 'true');
				$('.spinner').show();
				$('.hide-text').hide();
			})
		})();

		
	</script>

</body>
@include('sweetalert::alert')
</html>