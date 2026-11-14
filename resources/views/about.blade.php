@extends('master')
@section('title')
About page
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">About us</p>
    <h1>Acacia Education Centre</h1>
  </div>
</header>
<img class="banner-photo" src="{{ asset('images/about.jpg') }}" alt="Acacia Secondary School">

<section class="section">
  <div class="wrap prose">
    <p><strong>ACACIA Education Centre</strong> was established by the Board of Directors of Partners in Development (PID), who are committed, experienced and professional in human resource development, entrepreneurship, financial management and administration. The school was established to carter for better education for the country’s young generation triggered by global demand and the rapidly expanding Information and Communication Technology (ICT).</p>
  </div>
  <div class="wrap stack" style="margin-top: 1.5rem;">
    <article class="info-card">
      <h3>Vision</h3>
      <p>To be the best and highly respected academic institution in the country that strives to offer the best academic opportunities. Our greatness springs from our great inherent energy to educate the young generation within the national ethical, social and moral limits and standards in order to produce the best leaders of tomorrow - engineers, doctors, lawyers, entrepreneurs and scholars.</p>
    </article>
    <article class="info-card">
      <h3>Mission</h3>
      <p>To provide high quality education. To offer high quality education with a special emphasis of producing all round educated ladies and gentlemen who are God fearing, literate, skillful, confident and have self respect.</p>
    </article>
    <article class="info-card">
      <h3>Aims and goals</h3>
      <p>To offer good foundation for best education for youth in Tanzania! OUR PURPOSE IS TO FIT THEM FOR LIFE.</p>
      <ol>
        <li>One of the best schools in the country in terms of learning opportunities to both boys and girls.</li>
        <li>To increase more vacancies for standard seven leavers for that long journey to academic and educational prowess.</li>
        <li>To offer the best academic opportunities to Tanzanian youth which prepares children for life – suitable for the 21st century.</li>
        <li>To provide all the facilities necessary for learning and activities that enable children acquire knowledge, understanding and skills in all his/her subjects.</li>
      </ol>
    </article>
    <div class="two">
      <article class="info-card">
        <h3>School administration</h3>
        <p>The school is managed by the School Manager, the Headmaster, Assistant Headmaster, the Academic Master and teachers and the student government.</p>
      </article>
      <article class="info-card">
        <h3>Future prospects</h3>
        <p>Acacia’s paramount goal is to establish a full fledged Vocational Training Centre, a kindergarten and primary school.</p>
      </article>
    </div>
    <article class="info-card">
      <h3>Communication</h3>
      <p>
        School Manager<br>
        Acacia Education Centre<br>
        P. O. Box 172, Mlandizi, Kibaha Coast Region.<br>
        <a href="mailto:acaciaedc@yahoo.co.uk">acaciaedc@yahoo.co.uk</a><br>
        Tel: +255 22 754590874, +255 22 714490405, +255 22 713270025<br>
        Physical Address: Vikuruti village, Mlandizi Township, Kibaha District in Coast Region. Location: 5½ km from Mlandizi town, along Mlandizi-Bagamoyo road. About 71km from Dar es Salaam.
      </p>
    </article>
  </div>
</section>
@stop
