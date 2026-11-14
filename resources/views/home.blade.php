@extends('master')
@section('title')
Home page
@stop
@section('content')
<section class="hero" style="background-image: url('{{ asset('images/campus.jpg') }}')">
  <div class="hero-shade">
    <div class="wrap">
      <p class="kicker">Boarding school · Mlandizi</p>
      <h1>Winners never give up.</h1>
      <p class="lede">Acacia Secondary School and Vocational Training Centre is a co-educational non-government boarding school in Mlandizi, Kibaha. Reg. No. S. 3588.</p>
      <div class="hero-actions">
        <a class="btn" href="{{ url('applications') }}">Apply</a>
        <a class="btn btn-line" href="{{ url('about') }}">About the school</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <aside class="stack">
      <div class="panel">
        <h2>Our motto</h2>
        <p>"WINNERS NEVER GIVE UP" The purpose being that the students should always strive for excellence, they should never give up!. They should realize this fact by working hard and respecting their teachers and fellow students.</p>
      </div>
      <div class="panel">
        <h2>Quick</h2>
        <ul class="quick-list">
          <li><a href="{{ url('forms') }}">Admission forms</a></li>
          <li><a href="{{ url('campus') }}">School facilities</a></li>
          <li><a href="{{ url('forms') }}">Form 4 home work</a></li>
          <li><a href="{{ url('about') }}">About us</a></li>
        </ul>
      </div>
    </aside>
    <div>
      <p class="kicker">Welcome</p>
      <h2>Welcome to Acacia Secondary School</h2>
      <p>The Acacia Secondary School and Vocational Training Centre with Reg. No. S. 3588 is a co-educational non-government boarding school in Mlandizi, Kibaha. It was founded by the Board of Directors of Partners in Development (PID).</p>
      <p>The school was established to carter for better education for the country’s young generation triggered by global demand and the rapidly expanding Information and Communication Technology (ICT).</p>
      <img src="{{ asset('images/pic1.jpg') }}" alt="Students in class">
    </div>
  </div>
</section>

<section class="section band">
  <div class="wrap">
    <p class="kicker">What’s new</p>
    <h2>News from the school</h2>
    <div class="news-grid">
      <article class="news-card">
        <h3>News and events</h3>
        <p><a href="{{ url('forms') }}">Link to Form Four homeworks during coronavirus break</a></p>
        <p><a href="{{ url('forms') }}">Link to application forms</a></p>
      </article>
      <article class="news-card">
        <h3>Exam results</h3>
        <p>Nothing announced.</p>
      </article>
      <article class="news-card">
        <h3>Articles and stories</h3>
        <p>Being added.</p>
      </article>
    </div>
  </div>
</section>
@stop
