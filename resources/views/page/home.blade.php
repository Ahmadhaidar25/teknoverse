@extends('layout.main-page')
@section('content')
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
	@endsection