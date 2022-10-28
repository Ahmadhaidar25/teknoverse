@extends('layout.main-page')
@section('content')


<section id="about" class="about">
  <div class="container">
    <h1 data-aos="fade-right">News</h1>
    
    <div class="row">
      @foreach($data as $x)
      <div class="col-xl-4 col-md-6 mb-4">
       <div class="card">
        <img src="{{$x['urlToImage']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$x['title']}}</h5>
          <p class="card-text">{{$x['description']}}</p>
          <p class="card-text"><small class="text-muted">{{$x['publishedAt']}}</small></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
</div>



@endsection