@extends('layouts.default')

@section('content')

<!--Air message -->
@include('particals.airMessage')

<div class="banner-top">
	<div class="container">
		<h1>Sisene</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Home</a><label>/</label>Sisene</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
		
			<form>
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
				<label class="hvr-skew-backward">
					<input type="submit" value="Logi sisse">
				</label>
			</div>
			<div class="col-md-6 login-right">
				 <h3>Registreeri enda konto tasuta!</h3>
				 
				 <p>Kui sul puudub kasutaja, siis mine registreeri endale konto. Vajuta all olevat registreeri nuppu</p>
				<a href="{{ url('/register')}}" class=" hvr-skew-backward">Registreerima</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

<br>
<br>
@stop