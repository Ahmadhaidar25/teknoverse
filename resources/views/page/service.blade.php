@extends('layout.main-page')
@section('content')
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

@endsection