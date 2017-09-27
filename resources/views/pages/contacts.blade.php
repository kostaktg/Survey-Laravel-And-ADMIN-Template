@extends('layouts.master')





@section('content')







<section id="our-team" class="sections" style="margin-top:10%;">
	<div class="container">
		<!-- Example row of columns -->
		<div class="row">


<div class="panel panel-default">

  <div class="panel-footer">Contact me</div>
</div>

<form>

  <div class="form-group">
    <label for="pwd">First name</label>
    <input type="password" class="form-control" id="pwd">
  </div>
    <div class="form-group">
    <label for="last">Last name</label>
    <input type="email" class="form-control" id="last">
  </div>
    <div class="form-group">
    <label for="email">Email address *</label>
    <input type="email" class="form-control" id="email">
  </div>
    <div class="form-group">
    <label for="text">Message *</label>
    <textarea class="form-control" id="text" aria-describedby="sizing-addon1" rows="7"></textarea>
  </div>

  <button type="submit" class="btn btn-default">Send</button>
</form>



		</div>

	</div> <!-- /container -->       
</section>

<div class="scroll-top">



</div>

<!--Footer-->
<footer>
	<div class="container">
		<hr>
		<div class="row">

			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="social-network">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="copyright">
					<p>GERYVIG <i class="fa fa-heart"></i> by Kostadin Giuviiski </a>2017. All rights reserved.</p>
				</div>
			</div>

		</div>
	</div>

	@endsection