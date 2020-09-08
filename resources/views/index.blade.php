@extends('templates.page')
@section('header.head')
	@parent
	<link rel="stylesheet" href="{{asset('css/index-styles.css')}}">
@endsection
@section('content')
<header id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col">@include('templates.parts.navbar')</div>
		</div>
	</div>
</header>
<section id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col">@include('templates.parts.jumbotron')</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
      <div class="col-md-4">
        <h2>Heading 1</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading 2</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading 3</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
    </div>
	</div>
</section>
<footer class="footer mt-5 bg-white py-3">
  <div class="container">
  	@include('templates.parts.footer')
  </div>
</footer>
@endsection