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
            <div class="col-md-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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