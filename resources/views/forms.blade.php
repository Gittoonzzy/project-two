@extends('master')
@section('title')
Application Forms
@stop
@section('content')
<div class ="container divForms">
<br/>


<h2 class="text-center">Application Forms</h2>
<br/>
<ul class="list-group list-group-flush">
    <li class="list-group-item">Application Forms (O-level)
    <ol>
    <li><a href="{{ URL::to('files/2020 Acacia Sec. School Application Form FI to VIV _ Swahili Version.pdf') }}">Application Form 2020 (Swahili)</a></li>
	<li><a href="{{ URL::to('files/2020 Acacia Sec. School Application Form FI to FIV _English Version.pdf') }}">Application Form 2020 (English)</a></li>
    <li><a href="{{ URL::to('files/vifalazima.pdf') }}">Required Requirements (Swahili)</a></li>
    </ol>
    </li>
    <li class="list-group-item">Applications forms (A-level)
    <ol>
    <li><a href="{{ URL::to('files/2020 Acacia High School Application Form FV & FVI _Swahili Version.pdf') }}">Application Form 2020 (Swahili)</a></li>
	<li><a href="{{ URL::to('files/2020 Acacia Sec. School Application Form FV english Version.pdf') }}">Application Form 2020 (English)</a></li>
    <li><a href="{{ URL::to('files/formVinstructions.pdf') }}">Joinig Instructions 2019</a></li>
    </ol>
    </li>
    <li class="list-group-item">Other documments
    <ol>
    <li><a href="{{ URL::to('files/personalRequirements.pdf') }}">Personal Requirments</a></li>
    <li><a href="{{ URL::to('files/medicalExamination.pdf') }}"> Medical Examination</a></li>
    </ol>
    </li>
    
  </ul>
  <br/>
  <br/>
</div>
@stop
 