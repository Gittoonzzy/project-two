@extends('master')
@section('title')
Curriculum page
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">Academics</p>
    <h1>Curriculum</h1>
  </div>
</header>
<img class="banner-photo" src="{{ asset('images/pic1.jpg') }}" alt="Students in class">

<section class="section">
  <div class="wrap prose">
    <p>Our school Motto is “WINNERS NEVER GIVE UP” The purpose being that the students should always strive for excellence, they should never give up!. They should realize this fact by working hard and respecting their teachers and fellow students.</p>
    <p>The education of the young persons is not merely their mental development. It means training for life – for work and constant good work. In order to achieve that ACACIA offers majors in Science, Arts, Commerce, Information and Communication Technology and Entrepreneurship. Specifically the following subjects at ‘O’ level are offered: Mathematics, Biology, Chemistry, Physics, English, Kiswahili, Geography, History, Commerce, Bookkeeping, Civics, Fine Art, Information and Communication Technology, and Entrepreneurship. At ‘A’ level the school offers HGE, HGL, HKL, ECA &amp; PGM.</p>
    <p>In order to fulfill our objectives the school has the students do homework, tests; the beginning of the term tests (BOT), mid-term tests (MOT), end of term tests (EOT), continuous assessment and terminal exams.</p>
  </div>
  <div class="wrap card-grid" style="margin-top: 1.5rem;">
    <article class="info-card">
      <h3>Educational clubs</h3>
      <p>Environment, debate, prevention of corruption, drama club.</p>
    </article>
    <article class="info-card">
      <h3>Skills development</h3>
      <p>Due to the importance of self employment, ACACIA offers Vocational Training and develops students in various skills such as Entrepreneurship, Tailoring and dress making, Information Technology and Secretarial Services, Carpentry, Animal Husbandry and Gardening.</p>
    </article>
    <article class="info-card">
      <h3>Sports and games</h3>
      <p>Youths are uniquely vulnerable to distractions. To avoid this, students at ACACIA are frequently exposed to both indoor and field sports and games. The school offers football, volleyball, basketball, drama, debates, quizzes and the like. All these are meant to identify talents and be a great stimulant for the students’ minds as they pursue their studies.</p>
    </article>
  </div>
  <div class="wrap photo-grid" style="margin-top: 1.5rem;">
    <figure class="shot">
      <img src="{{ asset('images/pic1.jpg') }}" alt="Students in class">
      <figcaption>Students in class</figcaption>
    </figure>
    <figure class="shot">
      <img src="{{ asset('images/laboratories.jpg') }}" alt="Acacia laboratories">
      <figcaption>Acacia laboratories</figcaption>
    </figure>
    <figure class="shot">
      <img src="{{ asset('images/capentry.jpg') }}" alt="Development skills">
      <figcaption>Development skills</figcaption>
    </figure>
    <figure class="shot">
      <img src="{{ asset('images/computerLab.jpg') }}" alt="Computer lab">
      <figcaption>Computer lab</figcaption>
    </figure>
    <figure class="shot">
      <img src="{{ asset('images/sports.jpg') }}" alt="Football ground">
      <figcaption>Football ground</figcaption>
    </figure>
    <figure class="shot">
      <img src="{{ asset('images/development_skills.jpg') }}" alt="Development skills">
      <figcaption>Development skills</figcaption>
    </figure>
  </div>
</section>
@stop
