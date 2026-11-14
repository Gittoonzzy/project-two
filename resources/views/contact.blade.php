@extends('master')
@section('title')
Contact page
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">Contact</p>
    <h1>Write to the school</h1>
  </div>
</header>

<section class="section">
  <div class="wrap contact-grid">
    <div>
      <div class="map-frame">
        <iframe title="Map of Mlandizi, Tanzania" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d66783.26349412344!2d38.74426510245475!3d-6.714479621736359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c7ecca82c0353%3A0xf376558226556396!2sMlandizi%2C%20Tanzania!5e1!3m2!1sen!2sfi!4v1585484954471!5m2!1sen!2sfi" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <article class="info-card">
        <h2>School Manager</h2>
        <p>
          Acacia Education Centre<br>
          P. O. Box 172, Mlandizi, Kibaha Coast Region
        </p>
        <p>
          <a href="mailto:acaciaedc@yahoo.co.uk">acaciaedc@yahoo.co.uk</a><br>
          <a href="tel:+255747725725">+255 747 725 725</a><br>
          <a href="tel:+255714490405">+255 714 490 405</a>
        </p>
        <p><strong>Physical address:</strong> Vikuruti village, Mlandizi Township, Kibaha District in Coast Region. Location: 5½ km from Mlandizi town, along Mlandizi-Bagamoyo road. About 71km from Dar es Salaam.</p>
      </article>
    </div>
    <form class="form-card" action="/action_page.php" method="post">
      <h2>Message</h2>
      <div class="field">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="field">
        <label for="message">Message</label>
        <textarea id="message" name="text" rows="6"></textarea>
      </div>
      <button class="btn" type="submit">Submit</button>
    </form>
  </div>
</section>
@stop
