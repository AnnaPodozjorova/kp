@extends('layouts.default')

@section('content')
<!--Air message -->
@include('particals.airMessage')

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>404</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Kunstipood</a><label>/</label>404</h2>
	</div>
</div>
<!--login-->
	<div class="container">
		<div class="four">
		<h3>404</h3>
		<p>Sorry! Evidently the document you were looking for has either been moved or no longer exist.</p>
		<a href="{{ url('/')}}" class="hvr-skew-backward">Back To Home</a>
		</div>
	</div>
<!--//login-->

			<!--brand-->s
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
		
	<!--//content-->
		<!--//footer-->
@stop