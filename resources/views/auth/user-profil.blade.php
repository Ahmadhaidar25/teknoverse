@extends('layout.main')
@section('content')
<div class="card">
	<div class="card-body">
		<hr>
		<div class="container bootstrap snippet">
			<div class="row">

			</div>
			<div class="row">

				<div class="col-sm-3"><!--left col-->
					<form class="form" action="{{url('/update/avatar')}}" method="POST" enctype="multipart/form-data">
						<div class="card">

							<div class="card-body">

								<div class="text-center">
									@csrf
									@if(Auth::user()->avatar==null) 
									<img class="rounded mx-auto d-block" src="{{url('admin/img/boy.png')}}" style="width: 200px">
									@else
									<img class="rounded mx-auto d-block" src="{{url('file_avatar/'.auth()->user()->avatar)}}" style="width: 200px">
									@endif
									<h6>Upload a different photo...</h6>

									<div class="mb-3">
										<input class="form-control" type="file" name="avatar">
									</div>

								</div></hr>
								<button type="reset" class="btn btn-danger">Cancel</button>
								<button type="submit" class="btn btn-success">
									<div class="spinner">
										<i role="status" class="spinner-border spinner-border-sm"></i></div>
										<div class="hide-text">Save</div>
									</button>
								</div>
							</div>
						</form>

					</div><!--/col-3-->

					<div class="col-sm-9">

						<div class="card">
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane active" id="home">
										<hr>
										<form class="form" action="{{url('/update/profil')}}" method="post">
											@csrf
											@method('patch')
											<div class="form-group">

												<div class="col-xs-6">
													<label for="first_name"><h4>name</h4></label>
													<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
												</div>
											</div>
											<div class="form-group">

												<div class="col-xs-6">
													<label for="last_name"><h4>Email</h4></label>
													<input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
												</div>
											</div>

											<div class="form-group">
												<div class="col-xs-6">
													<label for="last_name"><h4>No Telepon</h4></label>
													<input type="text" class="form-control" name="no_tlp" value="{{Auth::user()->no_tlp}}">
												</div>
											</div>


											<div class="form-group">
												<div class="col-xs-12">
													<br>
													<button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>

													<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>
														<div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i></div>
														<div class="hide-text">Save</div>
													</button>
												</div>
											</div>
										</form>

										<hr>

									</div><!--/tab-pane-->

								</div><!--/tab-content-->

							</div>
						</div>
						
					</div><!--/col-9-->



				</div><!--/row-->
			</div>
		</div>

		@endsection