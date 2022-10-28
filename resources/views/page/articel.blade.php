@extends('layout.main-page')
@section('content')

<section id="articel" class="testimonials section-bg mt-3">
	<div class="container">
		 
		<div class="card mt-3">
			<div class="card-body">

				@forelse($articel as $x)
				@if($x->title==null)
				@else
				<h5 class="card-title mt-3">{{$x->no}}.&nbsp;{{$x->title}}</h5>
				@endif
				<!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
				<p class="card-text">{!! $x->description !!}</p>
				
				@if($x->image==null)
				@else
				<img src="{{url('file_articel/'.$x->image)}}" class="img-fluid" alt="...">
				@endif
				@empty
				<div class="text-center">
					<img src="{{url('admin/img/no_data.png')}}"  class="rounded" 
					style="width: 400px;">
					<h5>No data</h5>
				</div>
				@endforelse
			</div>

		</div>
		
		
		
		
		{{ $articel->onEachSide(1)->links() }}
	</div>
</section>
@endsection