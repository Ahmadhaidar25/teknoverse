 @extends('layout.main')
 @section('content')
 <div class="alert alert-success" role="alert">
  <h1>
   @lang("Welcome"), {{Auth::user()->name}}
  </h1>
</div>
@endsection