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
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#about">About</a></li>
					<li><a class="nav-link scrollto" href="#services">Services</a></li>
					<li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
					<li><a class="nav-link scrollto" href="#vision">Vision And Mision</a></li>
					
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
					<li><a class="nav-link scrollto" href="#articel">Articel</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center" style="background:white;">

		<div class="container-fluid" data-aos="fade-up">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">

					<div id="text">
					</div>
					<h2 style="color:black;">We are team of talented designers making websites with Bootstrap</h2>
					<div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
				</div>
				<div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
					<img src="{{url('template/assets/img/Header.png')}}" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">
				<h1 data-aos="fade-right">About Us</h1>
				<div class="row mt-2">
					<div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
						<img src="{{url('file_about/'.$about->file)}}" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
						<p>Saat ini dunia telah memasuki era baru dimana aktifitas digital sudah tidak dapat dilepaskan dari aktivitas sehari hari.
						</p>

						<p>
							Pada sektor industri, digitalisasi menjadi sebuah keharusan agar proses manufaktur dapat lebih efisien sehingga mampu mencapai level kompetisi yang diharapkan.
						</p>

						<p>
							Banyak perusahaan masih mengalami keterlambatan dalam transformasi digital, hal ini disebabkan oleh faktor SDM yang belum siap, fasilitas produksi yang belum dimanfaatkan secara optimal dan belum terhubung dengan perangkat IOT.
						</p>

						<p>
							Teknoverse adalah perusahaan start up yang dibangun untuk bekerja sama dengan industri dalam mewujudkan transformasi digital di sektor industri menjadi lebih maksimal.
						</p>
						<p>
							Selamat datang di dunia digital Teknoverse.
						</p>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		


		<!-- ======= Services Section ======= -->
		<section id="services" class="about">
			<div class="container">
				<h1 data-aos="fade-right">Service</h1>
				<div class="row mt-2">
					<div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
						<img src="{{url('file_service/'.$service->file)}}" class="img-fluid animated" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
						<p>
							Teknoverse dapat membantu industri untuk dapat melakukan proses transformasi digital dibidang industri manufaktur sehingga lebih efisien dan kompetitif.
						</p>

						<p>
							Interkoneksi dan integrasi dari field level sampai dengan enterprise level dapat saling terhubung satu sama lain sehingga terciptakan ekosistem supply chain yang lengkap.
						</p>

						<p>
							Teknoverse berpengalaman dalam hal melakukan proses integrasi suply chain secara digital (e-kanban) dan mengintegrasikan dengan sistem ERP yang sudah ada, e-Warehouse, Digital Maintenance Support dan Quality System.
						</p>

						<p>
							Keseluruhan sistem tersebut dapat diintegrasikan ke dalam dashboard sehingga pelanggan dapat melakukan monitoring proses manufaktur secara real time.
						</p>
					</div>
				</div>

			</div>
		</section><!-- End About Service -->

		<!-- ======= Features Section ======= -->
		<!-- End Features Section -->

		<!-- ======= Testimonials Section ======= -->
		<section id="articel" class="testimonials section-bg">
			@yield('articel')
		</section><!-- End Testimonials Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Portfolio</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-app">App</li>
							<li data-filter=".filter-card">Card</li>
							<li data-filter=".filter-web">Web</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container">

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 1</h4>
								<p>App</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Web 3</h4>
								<p>Web</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 2</h4>
								<p>App</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 2</h4>
								<p>Card</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Web 2</h4>
								<p>Web</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 3</h4>
								<p>App</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 1</h4>
								<p>Card</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 3</h4>
								<p>Card</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Web 3</h4>
								<p>Web</p>
							</div>
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Section -->
		<section id="vision" class="features">
			<div class="container" data-aos="fade-up">

				<h1 data-aos="fade-right">Vision And Mision</h1>
				<div class="row mt-2">
					<div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
						<img src="{{url('file_vision/'.$vision->file)}}" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
						<b>
							<p>
								Visi :
							</p>
						</b>

						<p>
							Menjadi perusahaan integrator IT dan OT yang terbaik dan terpercaya di kawasan Asia Pasifik.
						</p>

						<b>
							<p>
								Misi :
							</p>
						</b>

						<ol>
							<li>
								Mempercepat proses transformasi digital pada dunia industri manufaktur.
							</li>
							<li class="mt-2">
								Memberikan edukasi kepada pelanggan pada bidang transformasi digital.
							</li>
							<li class="mt-2">
								Mempersiapkan team yang handal dan berintegritas.
							</li>
							<li class="mt-2">
								Selalu menggunakan teknologi yang terbaik dan terdepan
							</li>
						</ol>

						
					</div>
				</div>

			</div>
		</section>

		<!-- ======= Pricing Section ======= -->
		<section id="pricing" class="pricing section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Pricing</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<div class="box">
							<h3>Free</h3>
							<h4><sup>$</sup>0<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li class="na">Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
						<div class="box featured">
							<h3>Business</h3>
							<h4><sup>$</sup>19<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
						<div class="box">
							<h3>Developer</h3>
							<h4><sup>$</sup>29<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
						<div class="box">
							<span class="advanced">Advanced</span>
							<h3>Ultimate</h3>
							<h4><sup>$</sup>49<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Pricing Section -->



		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<div class="info-box mb-4">
							<i class="bx bx-map" style="color: #0CA8B4;"></i>
							<h3>Our Address</h3>
							<p>
								{{$address->address}}
							</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-envelope" style="color: #0CA8B4;"></i>
							<h3>Email Us</h3>
							<p>{{$email_us->email}}</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-phone-call" style="color: #0CA8B4;"></i>
							<h3>Call Us</h3>
							@foreach($call_us as $y)
							
							<p>{{$y->no_telepon}}</p>
							
							@endforeach
						</div>
					</div>


					<div class="col-lg-3 col-md-6">
						<div class="info-box  mb-4">
							<i class="bx bx-timer" style="color: #0CA8B4;"></i>
							<h3>Time Work</h3>
							<p>
								Mon-Fri: {{$time_work->jam_masuk}} - {{$time_work->jam_keluar}}<br>
								Sat-Sun: Closed
							</p>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-6 ">
						<iframe src="{{$map->url}}" 
							style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>



						<div class="col-lg-6">

							<div class="card">
								<div class="card-body">
									

									<form class="form" action="{{url('/post/message')}}" method="post">
										@csrf
										<div class="row">
											<div class="col-md-6 form-group">
												<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
											</div>
											<div class="col-md-6 form-group mt-3 mt-md-0">
												<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
											</div>
										</div>
										<div class="form-group mt-3">
											<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
										</div>
										<div class="form-group mt-3">
											<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
										</div>

										<div class="text-center mt-3">
											<button type="submit" class="btn btn-success">
												<div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i></div>
												<div class="hide-text">Send Message</div>
											</button>
										</div>
									</form>
								</div>
							</div>
							
						</div>

					</div>

				</div>
			</section><!-- End Contact Section -->

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