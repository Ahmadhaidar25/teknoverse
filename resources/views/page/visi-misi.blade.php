@extends('layout.main-page')
@section('content')
<section id="vision" class="features mt-4">
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


@endsection