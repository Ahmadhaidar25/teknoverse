@extends('layout.main')
@section('content')
<a href="{{url('/master/articel')}}" class="btn btn-danger">Back</a>
<div class="modal-content mt-2">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Edit Articel</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<form class="form" action="{{url('/update/articel/'.$edit->id)}}" method="post" enctype="multipart/form-data">
		<div class="modal-body">
			@csrf

			<div class="mb-3">
				<label class="form-label">No</label>
				<input type="text" class="form-control" name="no" value="{{$edit->no}}" readonly>
			</div>
			<div class="mb-3">
				<label class="form-label">Title</label>
				<input type="text" class="form-control" name="title" value="{{$edit->title}}">
			</div>

			<div class="mb-3">
				<label class="form-label">Description</label>
				<textarea class="form-control" name="description" id="article">{{$edit->description}}</textarea>
			</div>

			<div class="mb-3">
				<label class="form-label">Post Image</label>
				<input type="file" class="form-control" name="image">
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">
				<div class="spinner">
					<i role="status" class="spinner-border spinner-border-sm"></i></div>
					<div class="hide-text">Save</div>
				</button>
			</div>

		</form>
	</div>
	@endsection