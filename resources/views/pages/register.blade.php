@extends('layouts.default')

@section('content')
<!--Air message -->
@include('particals.airMessage')

<div class="banner-top">
	<div class="container">
		<h1>Regristreeru</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Home</a><label>/</label>Regristreeru</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
			<form>
			<div class="col-md-6 login-do">
			<div class="login-mail">
					<input type="text" placeholder="Name" required="">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Phone Number" required="">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
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
					<input type="submit" value="Registreeri">
				</label>
			
			</div>
			<div class="col-md-6 login-right">
				 <h3>Juhul kui sul on kasutaja olemas, siis vajuta all olevat nuppu Login</h3>
				 
				 <p>Kui sul kasutaja puudub, siis vasakul pool on registreerimis vorm. Täida väljad vajaliku informatsiooniga ja vajuta nuppu Registreeri</p>
				<a href="{{ url('/login')}}" class="hvr-skew-backward">Login sisse</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

<br>

@stop