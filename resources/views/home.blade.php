@extends('master')
@section('title')
Home page
@stop
@section('content')
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="text-center divMotto">
<h3>Our Motto</h3>
<p>
"WINNERS NEVER GIVE UP" The purpose being that
 the students should always strive for excellence,
 they should never give up!. They should realize this fact by working 
hard and respecting their teachers and fellow students.</p>

</div>
<div class="text-center divQuick">
<h3>Quick</h3>
<hr/>
<p><a href="{{ URL::to('forms') }}">Admission Forms</a></p>
<hr/>
<p><a href="{{ URL::to('campus') }}">School Facilities</a></p>
<hr/>
<p><a href="{{ URL::to('form4') }}">Form 4 home work</a></p>
<hr/>
<p><a href="{{ URL::to('about') }}">About Us</a></p>
<hr/>
</div>
</div>
<div class="col-md-9">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic1.jpg" class="img-fluid" alt="class 1" width="100%" height="100%">
    </div>
    <div class="carousel-item ">
      <img src="images/pic2.jpg" class="img-fluid" alt="class 2" width="100%" height="100%">
    </div>
   
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 text-center divHome">
<h3 >Welcome to Acacia Secondary School</h3>
<p>
The Acacia Secondary School and Vocational Training Centre with Reg. No. S. 3588 is a co-educational non-government boarding school in Mlandizi, Kibaha.
 It was founded by the Board of Directors of Partners in Development (PID).

The school was established to carter for better education for the country’s young generation triggered by global demand and the rapidly expanding Information and Communication Technology (ICT)
</p>
</div>
</div>

<div class="container text-center divHome">
  <h3>Whats New</h3>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">News And Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Exam results</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Articles and Stories</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
      <p>
      
<a href="{{ URL::to('form4') }}"> Link to Form Four homeworks during coronavirus break </a></p>
<p><a href="{{ URL::to('forms') }}"> Link to Application Forms</a></p>



      </p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    
      <p>Nothing Announced</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      
      <p>Being Added</p>
    </div>
  </div>
</div>
<br/>
<br/>
</div>
@stop
