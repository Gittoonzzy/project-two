<!doctype html>
<html lang="en">
  <head>
  <title>@yield('title', 'Acacia Home')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
content="Acacia secondary school website" />
<meta name="keywords"
content="Acacia, Secondary School, Mlandizi" />
<meta http-equiv="author"
content="Katunzi Bernard" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    
    
    
	@yield('head')
  </head>
  <body> 
   <div class="container-fluid">
 <div class ="row bg-dark text-white text-md-center">
 <div class="col-md-4" id="divLogin"><a href="{{ URL::to('home') }}">Login</a></div>
 <div class="col-md-4"></div>
  <div class="col-md-4" ></div>
 </div>
 </div>
 
 <div class="container-fluid">
 <div class ="row text-md-center masterDiv1">
 <div class="col-md-4" id="divMasterImage"><a href="{{ URL::to('home') }}"><img src="images/logo.jpeg"></a></div>
 <div class="col-md-4" id="divSchool"><h1>Acacia Secondary School</h1></div>
  <div class="col-md-4" id="divCallus">
  <i class='fas fa-phone-alt'></i>
  <p ><b>Call Us:+255 747725725</b></p>
  
  </div>
 </div>
 </div>
 
<nav class="navbar navbar-expand-md bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class='fas fa-list-alt' style='font-size:36px'></i>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('home') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('about') }}">About Us</a>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Academics
      </a>
      <div class="dropdown-menu bg-dark text-white">
        <a class="dropdown-item" href="{{ URL::to('curriculam') }}">Curriculam</a>
        
      </div>
    </li>
	 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admissions
      </a>
      <div class="dropdown-menu bg-dark text-white">
        <a class="dropdown-item" href="{{ URL::to('applications') }}">Applications</a>
        <a class="dropdown-item" href="{{ URL::to('forms') }}">Application Forms</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        School
      </a>
      <div class="dropdown-menu bg-dark text-white">
        <a class="dropdown-item" href="{{ URL::to('campus') }}">Campus and Facilities</a>
        <a class="dropdown-item" href="{{ URL::to('care') }}">Student Care</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Students
      </a>
      <div class="dropdown-menu bg-dark text-white">
      <a class="dropdown-item" href="{{ URL::to('form1') }}">Form One</a>
        <a class="dropdown-item" href="{{ URL::to('formGeneral') }}">Form Two</a>
        <a class="dropdown-item" href="{{ URL::to('formGeneral') }}">Form Three</a>
        <a class="dropdown-item" href="{{ URL::to('form4') }}">Form Four</a>
        <a class="dropdown-item" href="{{ URL::to('form5') }}">Form Five</a>
        <a class="dropdown-item" href="{{ URL::to('formGeneral') }}">Form Six</a>

      </div>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="{{ URL::to('gallery') }}">Gallery</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('contact') }}">Contact Us</a>
    </li>
  </ul>
  </div>
</nav>
	

	
<div class="content">
@yield('content')
</div>

<footer class="container-fluid bg-dark text-white ">
<div class="container text-center ">
<div class="row">
<div class="col-md-4">
<h4>About us</h4>
<p>
ACACIA Education Centre was established by the Board of
 Directors of Partners in Development (PID), who are committed, experienced and professional in human resource development,
 entrepreneurship, financial management and administration.
</p>
<h6 >REG. NO. S. 3588</h6>
</div>
<div class="col-md-4 divFooter">
<h4>The School</h4>
<hr/>
<p> <a href="{{ URL::to('campus') }}">Campus and Facilities</a></p>
<hr/>
<p><a href="{{ URL::to('care') }}">Student Care</a></p>
<hr/>
<p><a href="{{ URL::to('home') }}">School Achievements</a></p>
</div>
<div class="col-md-4 divFooter">
<h4>Information</h4>
<hr/>
<p><a href="{{ URL::to('applications') }}">Applying</a></p>
<hr/>
<p><a href="{{ URL::to('home') }}">Current news</a></p>
<hr/>
<p><a href="{{ URL::to('home') }}">Extras</a></p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<i class="far fa-copyright"></i>
<p>2020
 Acacia Secondary School</p>
</div>
</div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <script src = "js/myjs.js"></script>


</body>
</html>