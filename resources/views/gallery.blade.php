@extends('master')
@section('title')
Gallery page
@stop
@section('content')
<div class="container divGallery">
<br/>
<br/>
<div class="row">
<div class="col-md-4 divGalleryRow" id="chemLab">
<img src ="images/chemlab/img1.jpeg" />
<h5>Chemistry Labaratory </h5>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
</div>
</div>
<div class="row"></div>
<div class="row"></div>
<br/>
<br/>

<div class="modal fade" id="chemLabPics">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
 <div id="gallery">
 
 <img id="imagesCL"  src ="images/chemlab/img1.jpeg" />
 </div>
	  <a class="prev" id="prevCL">&#10094;</a>
    <a class="next" id="nextCL">&#10095;</a>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn acaciaButton" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
@stop