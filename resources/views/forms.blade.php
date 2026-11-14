@extends('master')
@section('title')
Application Forms
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">Admissions</p>
    <h1>Application forms</h1>
    <p>Form One through Form Six materials are collected here, with the 2020 application packs.</p>
  </div>
</header>

<section class="section">
  <div class="wrap">
    <ul class="doc-list">
      <li>
        <h2>Application forms (O-level)</h2>
        <ol>
          <li><a href="{{ url('files/2020 Acacia Sec. School Application Form FI to VIV _ Swahili Version.pdf') }}">Application Form 2020 (Swahili)</a></li>
          <li><a href="{{ url('files/2020 Acacia Sec. School Application Form FI to FIV _English Version.pdf') }}">Application Form 2020 (English)</a></li>
          <li><a href="{{ url('files/vifalazima.pdf') }}">Required Requirements (Swahili)</a></li>
        </ol>
      </li>
      <li>
        <h2>Application forms (A-level)</h2>
        <ol>
          <li><a href="{{ url('files/2020 Acacia High School Application Form FV & FVI _Swahili Version.pdf') }}">Application Form 2020 (Swahili)</a></li>
          <li><a href="{{ url('files/2020 Acacia Sec. School Application Form FV english Version.pdf') }}">Application Form 2020 (English)</a></li>
          <li><a href="{{ url('files/formVinstructions.pdf') }}">Joining Instructions 2019</a></li>
        </ol>
      </li>
      <li>
        <h2>Other documents</h2>
        <ol>
          <li><a href="{{ url('files/personalRequirements.pdf') }}">Personal Requirements</a></li>
          <li><a href="{{ url('files/medicalExamination.pdf') }}">Medical Examination</a></li>
        </ol>
      </li>
    </ul>
  </div>
</section>
@stop
