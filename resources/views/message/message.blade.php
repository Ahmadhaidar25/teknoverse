@extends('layout.main')
@section('content')
<div class="row">
	<!-- Datatables -->
	<div class="col-lg-12">

	</div>
	<!-- DataTable with Hover -->
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Message</h6>
			<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
					Add
				</button>-->
			</div>

			<div class="table-responsive p-3">
				<table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead class="thead-light">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($data as $x)
						<tr>
							<td>{{$x->name}}</td>
							<td>{{$x->email}}</td>
							<td>{{$x->subject}}</td>
							<td>{{$x->message}}</td>
							
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


	@endsection