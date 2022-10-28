@extends('layout.main-page')
@section('content')
<section id="about" class="about">
	<div class="container">
		<h1 data-aos="fade-right">Client</h1>
		<div class="row">
			@foreach($client as $x)
			<div class="col-xl-4 col-md-6 mb-4">
				<img src="{{url('file_client/'.$x->file)}}" class="rounded mx-auto d-block" 
				style="max-width: 300px;">
			</div>
			@endforeach

		</div>
	</div>
</section>
@endsection