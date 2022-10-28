@extends('layout.main-page')
@section('content')
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

@endsection