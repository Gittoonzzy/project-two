@extends('master')
@section('title')
Campus
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">The school</p>
    <h1>Campus and facilities</h1>
  </div>
</header>
<img class="banner-photo" src="{{ asset('images/campus.jpg') }}" alt="The school campus">

<section class="section">
  <div class="wrap stack">
    <article class="info-card">
      <h2>The school campus</h2>
      <p><strong>ACACIA</strong> is located at Vikuruti village, Mlandizi Township, Kibaha District in Coast Region. It is about 71km from Dar es Salaam and 5½ km from Mlandizi town, along Mlandizi-Bagamoyo road. The school campus covers an area of 55 acres and planned to accommodate kindergarten, primary school, secondary school and a vocational training centre with all the necessary facilities – classrooms, dormitories, laboratories, houses, libraries, playgrounds for games and sports.</p>
      <p><strong>This area was chosen by the owners of the school due to the following advantages.</strong> The school campus is non-noise, unpolluted from industries and vehicles. It offers the best environment for learning.</p>
      <p>The campus retains its natural form, acacias, green bushes, grass and tranquility. Fruit and decoration trees have been planted.</p>
      <p>The campus is easily accessible by the public means of transport (the daladalas) that ply between Mlandizi and Bagamoyo; every after 30 minutes.</p>
    </article>
    <div class="two">
      <article class="info-card">
        <h2>Teaching staff</h2>
        <p>Acacia has enough teaching staff that meets all students academic requirements. The teachers are both diploma holders and graduates from various local and international Universities. They are committed to their profession.</p>
      </article>
      <article class="info-card">
        <h2>Accommodation</h2>
        <p>Acacia Secondary School accommodates both boys and girls; it has several boys’ dormitories that accommodate at least 30 boys in each dormitory and 80 girls that can accommodate 4 girls in each room.</p>
      </article>
      <article class="info-card">
        <h2>The library</h2>
        <p>The two well stocked libraries have an extensive range of books, materials and resources. The library features reading corners, study areas, spaces for groups of students and PC workstations which are readily available for children to access information on-line or from CDs and DVDs.</p>
      </article>
      <article class="info-card">
        <h2>Sports and games</h2>
        <p>Young children are uniquely vulnerable to distractions. To avoid this students at ACACIA are frequently exposed to both indoor and field sports and games. The school offers football, volleyball, drama, debates, quizzes and the like. All these are meant to identify talents and be a great stimulant for the students' minds as they pursue their studies.</p>
      </article>
    </div>
    <article class="info-card">
      <h2>Transportation</h2>
      <p>The School has minibuses to cater for School and Teachers to town and other places.</p>
      <p>We welcome visits from prospective pupils and their families — this can be easily arranged by contacting our school secretary, Tel.: +255 (0) 713-270025 | email: <a href="mailto:info@acacia.ac.tz">info@acacia.ac.tz</a></p>
    </article>
  </div>
  <div class="wrap photo-grid" style="margin-top: 1.5rem;">
    <figure class="shot"><img src="{{ asset('images/gilrsDomitories.jpg') }}" alt="Girls dormitory"><figcaption>Girls dormitory</figcaption></figure>
    <figure class="shot"><img src="{{ asset('images/domitoriesBoys.jpg') }}" alt="Boys dormitory"><figcaption>Boys dormitory</figcaption></figure>
    <figure class="shot"><img src="{{ asset('images/schoolLibrary.jpg') }}" alt="School library"><figcaption>School library</figcaption></figure>
    <figure class="shot"><img src="{{ asset('images/computerLab.jpg') }}" alt="Computer lab"><figcaption>Computer lab</figcaption></figure>
    <figure class="shot"><img src="{{ asset('images/schoolWorkshop.jpg') }}" alt="School workshop"><figcaption>School workshop</figcaption></figure>
    <figure class="shot"><img src="{{ asset('images/sports1.jpg') }}" alt="Sports"><figcaption>Sports</figcaption></figure>
  </div>
</section>
@stop
