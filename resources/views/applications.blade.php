@extends('master')
@section('title')
Applications page
@stop
@section('content')
<header class="page-banner">
  <div class="wrap">
    <p class="kicker">Admissions</p>
    <h1>Acacia School admissions</h1>
  </div>
</header>

<section class="section">
  <div class="wrap prose">
    <p>Acacia Secondary School admissions policy does not discriminate against any child or their family. All children are welcome to apply to our schools regardless of nationality, ethnicity or religion.</p>
    <p>Acacia School does not have provision for children with severe or complex special educational needs. Whenever possible we aim to interview every child and their parents prior to entry.</p>
    <h2>Subjects offered</h2>
    <p>The education of the young persons is not merely their mental development. It means a training for life for work and constant good work. In order to achieve that ACACIA offers the following subjects:</p>
    <h3>O'Level</h3>
    <div class="subject-row">
      <span>Mathematics</span><span>Geography</span><span>History</span><span>Biology</span><span>Chemistry</span><span>Physics</span><span>English</span><span>Kiswahili</span><span>Commerce</span><span>Bookkeeping</span><span>Civics</span><span>Fine Art</span><span>ICT</span><span>Entrepreneurship</span>
    </div>
    <h3>A'Level</h3>
    <div class="subject-row">
      <span>HGE</span><span>HGL</span><span>HKL</span><span>ECA</span><span>HGK</span><span>PGM</span><span>PCB</span><span>CBG</span><span>PCM</span><span>CBA</span>
    </div>
    <p>Admissions to Acacia School can be made at any time through the Registrar, although there are cut-off dates during the year, which are designated by the Ministry of Education. The Ministry also requires all students to submit certain documents to the school before they can enter the educational system in Tanzania.</p>
    <p><strong>These are:</strong></p>
    <ol>
      <li>2 copies of your child’s passport size photos;</li>
      <li>2 copies of a parent’s / legal guardian’s document</li>
      <li>Copies of your child’s last 2 school reports for all children transfer to our school;</li>
      <li>Registration fee of (non-refundable).</li>
    </ol>
    <p>You can download the Application form in MS Word format/PDF and submit it with all the required documentation.</p>
    <p>Upon offer of a place, the school requires a non-refundable deposit of Payable to the cashier of school bank account. The deposit is deductible against the first terms’ fees.</p>
    <p>The Certificate must be on official school letterhead and must contain the following information:</p>
    <ul>
      <li>Full name of the child</li>
      <li>Date of enrolment in the school</li>
      <li>Child’s date of birth</li>
      <li>Date the child left the school</li>
      <li>Grade / Class on leaving the school</li>
      <li>School stamp and signature of the Principal</li>
      <li>Curriculum used</li>
    </ul>
    <a class="btn" href="{{ url('forms') }}">Download forms</a>
  </div>
</section>
@stop
