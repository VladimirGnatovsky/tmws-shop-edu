@extends('templates.page')
@section('header.head')
@parent
<style>{{$styles}}</style>
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
            <div class="col-md-12">
                <?php phpinfo(INFO_GENERAL); ?>
                <?php phpinfo(INFO_CREDITS); ?>
                <?php // phpinfo(INFO_CONFIGURATION); ?>
                <?php // phpinfo(INFO_MODULES); ?>
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