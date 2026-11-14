@extends('master')
@section('title')
Gallery page
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">Gallery</p>
    <h1>Life at Acacia</h1>
  </div>
</header>

<section class="section">
  <div class="wrap">
    <h2>Chemistry laboratory</h2>
    <div class="photo-grid five">
      <figure class="shot"><img src="{{ asset('images/chemlab/img1.jpeg') }}" alt="Chemistry laboratory"><figcaption>Chemistry laboratory</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/chemlab/img2.jpeg') }}" alt="Chemistry laboratory"><figcaption>Chemistry laboratory</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/chemlab/img3.jpeg') }}" alt="Chemistry laboratory"><figcaption>Chemistry laboratory</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/chemlab/img4.jpeg') }}" alt="Chemistry laboratory"><figcaption>Chemistry laboratory</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/chemlab/img5.jpeg') }}" alt="Chemistry laboratory"><figcaption>Chemistry laboratory</figcaption></figure>
    </div>
  </div>
  <div class="wrap" style="margin-top: 2rem;">
    <h2>Campus</h2>
    <div class="photo-grid">
      <figure class="shot"><img src="{{ asset('images/pic2.jpg') }}" alt="Class"><figcaption>Class</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/laboratories.jpg') }}" alt="Laboratories"><figcaption>Laboratories</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/schoolLibrary.jpg') }}" alt="Library"><figcaption>Library</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/computerLab.jpg') }}" alt="Computer lab"><figcaption>Computer lab</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/schoolWorkshop.jpg') }}" alt="Workshop"><figcaption>Workshop</figcaption></figure>
      <figure class="shot"><img src="{{ asset('images/sports.jpg') }}" alt="Football ground"><figcaption>Football ground</figcaption></figure>
    </div>
  </div>
</section>
@stop
