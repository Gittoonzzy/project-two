@extends('master')
@section('title')
Contact page
@stop
@section('content')
<div class="container">
  <br/>
<div class="row">
<div class="col-md-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d66783.26349412344!2d38.74426510245475!3d-6.714479621736359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c7ecca82c0353%3A0xf376558226556396!2sMlandizi%2C%20Tanzania!5e1!3m2!1sen!2sfi!4v1585484954471!5m2!1sen!2sfi" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6 ">
 <form action="/action_page.php" class="formContact">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
	 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
       <div class="form-group">
      <label for="comment">Message:</label>
      <textarea class="form-control" rows="5" id="c´message" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
</div>
<div class="col-md-6 divContact">
<p>
<b>School Manager</b><br/>
Acacia Education Centre<br/>
P. O. Box 172, Mlandizi, Kibaha Coast Region
</p>
<p>
<b>E-mail:</b>acaciaedc@yahoo.co.uk<br>
<b>Tel:</b>+255 747725725 , +255 714490405</p>
<p>
<b>Physical Address:</b> Vikuruti village, Mlandizi Township, Kibaha District in Coast Region. Location: 51/2 km from Mlandizi town, 
along Mlandizi-Bagamoyo road. About 71km from Dar es Salaam.</p>
</div>

</div>
<br/>
<br/>
</div>
@stop
