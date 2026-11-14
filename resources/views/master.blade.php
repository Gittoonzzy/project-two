<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Acacia Home')</title>
  <meta name="description" content="Acacia Secondary School, a boarding school in Mlandizi, Kibaha.">
  <meta name="keywords" content="Acacia, Secondary School, Mlandizi">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <a class="skip-link" href="#content">Skip to content</a>

  <div class="utility">
    <div class="wrap utility-row">
      <span>Reg. No. S. 3588 · Mlandizi, Kibaha</span>
      <span>
        <a href="{{ url('home') }}">Login</a>
        <a href="tel:+255747725725">+255 747 725 725</a>
      </span>
    </div>
  </div>

  <header class="mast">
    <div class="wrap mast-row">
      <a class="crest" href="{{ url('home') }}">
        <img src="{{ asset('images/acacia_logo.jpeg') }}" alt="Acacia Secondary School">
        <span>
          <strong>Acacia Secondary School</strong>
          <small>Education Centre · Mlandizi</small>
        </span>
      </a>
      <p class="mast-call">
        <span>Call us</span>
        <a href="tel:+255747725725">+255 747 725 725</a>
      </p>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="school-nav">Menu</button>
    </div>
    <nav id="school-nav" class="school-nav">
      <div class="wrap nav-row">
        <a class="{{ request()->is('/') || request()->is('home') ? 'is-active' : '' }}" href="{{ url('home') }}">Home</a>
        <a class="{{ request()->is('about') ? 'is-active' : '' }}" href="{{ url('about') }}">About us</a>
        <div class="menu-item">
          <a class="{{ request()->is('curriculam') ? 'is-active' : '' }}" href="{{ url('curriculam') }}">Academics</a>
          <div class="submenu">
            <a href="{{ url('curriculam') }}">Curriculum</a>
          </div>
        </div>
        <div class="menu-item">
          <a class="{{ request()->is('applications') || request()->is('forms') ? 'is-active' : '' }}" href="{{ url('applications') }}">Admissions</a>
          <div class="submenu">
            <a href="{{ url('applications') }}">Applications</a>
            <a href="{{ url('forms') }}">Application forms</a>
          </div>
        </div>
        <div class="menu-item">
          <a class="{{ request()->is('campus') || request()->is('care') ? 'is-active' : '' }}" href="{{ url('campus') }}">School</a>
          <div class="submenu">
            <a href="{{ url('campus') }}">Campus and facilities</a>
            <a href="{{ url('care') }}">Student care</a>
          </div>
        </div>
        <div class="menu-item">
          <a href="{{ url('forms') }}">Students</a>
          <div class="submenu">
            <a href="{{ url('forms') }}">Form One</a>
            <a href="{{ url('forms') }}">Form Two</a>
            <a href="{{ url('forms') }}">Form Three</a>
            <a href="{{ url('forms') }}">Form Four</a>
            <a href="{{ url('forms') }}">Form Five</a>
            <a href="{{ url('forms') }}">Form Six</a>
          </div>
        </div>
        <a class="{{ request()->is('gallery') ? 'is-active' : '' }}" href="{{ url('gallery') }}">Gallery</a>
        <a class="{{ request()->is('contact') ? 'is-active' : '' }}" href="{{ url('contact') }}">Contact</a>
      </div>
    </nav>
  </header>

  <main id="content">
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="wrap footer-grid">
      <div>
        <h2>About us</h2>
        <p>ACACIA Education Centre was established by the Board of Directors of Partners in Development (PID), who are committed, experienced and professional in human resource development, entrepreneurship, financial management and administration.</p>
        <p class="reg">Reg. No. S. 3588</p>
      </div>
      <div>
        <h2>The school</h2>
        <a href="{{ url('campus') }}">Campus and facilities</a>
        <a href="{{ url('care') }}">Student care</a>
        <a href="{{ url('home') }}">School achievements</a>
      </div>
      <div>
        <h2>Information</h2>
        <a href="{{ url('applications') }}">Applying</a>
        <a href="{{ url('forms') }}">Application forms</a>
        <a href="{{ url('home') }}">Current news</a>
      </div>
    </div>
    <p class="legal">© 2020 Acacia Secondary School</p>
  </footer>

  <script>
    (function () {
      var toggle = document.querySelector('.nav-toggle');
      var nav = document.getElementById('school-nav');
      if (!toggle || !nav) return;
      toggle.addEventListener('click', function () {
        var open = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      });
    })();
  </script>
</body>
</html>
