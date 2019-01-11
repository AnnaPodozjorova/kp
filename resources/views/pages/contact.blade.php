@extends('layouts.default')

@section('content')
<!--Air message -->
@include('particals.airMessage')

<div class="banner-top">
	<div class="container">
		<h1>Kontakt</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Kunstipood</a><label>/</label>Kontakt</h2>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="col-md-6 contact-left">
						<h3>Meiega kontakti saada on kõige kergem saata kiri. </h3>
						<p>Kui sul on mingeid küsimusi mida soovid küsida, siis kirjuta meile julgelt kiri. Kirja saad kirjutada paremal pool olevasse kasti, täida vastavad väljad.
							Kindlasti võid ka helistada meile veebipoodi, kuid siis telefoni võtab vastu poes olev inimene, kes parasjagu tööl on. Ta ei pruugi nii hästi teid informatsiooniga varustada, seega soovitame soojalt kirja kirjutada, kui on mingi kindlam küsimus.
						</p>
					
			
					<div class="address">
					<div class=" address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<h3>Address</h3>
								<p>Järveküla tee 75, Kohtla-Järve, 30322</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Telefoni nr:<h3>
								<p>+123456789</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
							<h3>Email:</h3>
								<p><a href="mailto:info@example.com"> Veebipood@ttü.ee</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-bell"></i>
							<div class="address1">
								<h3>Oleme avatud:</h3>
								<p>Esmaspäev-Reede, 7AM-5PM</p>
							</div>
							<div class="clearfix"> </div>
						</div>
</div>
				</div>
				<div class="col-md-6 contact-top">
					<h3>Saada meile kiri!</h3>
					<form>
						<div>
							<span>Sinu nimi </span>		
							<input type="text" value="" >						
						</div>
						<div>
							<span>Sinu E-mail </span>		
							<input type="text" value="" >						
						</div>
						<div>
							<span>Teema millest soovid rääkida</span>		
							<input type="text" value="" >	
						</div>
						<div>
							<span>Sinu sõnum</span>		
							<textarea> </textarea>	
						</div>
						<label class="hvr-skew-backward">
								<input type="submit" value="Send" >
						</label>
</form>						
				</div>
		<div class="clearfix"></div>
		</div>
		</div>
		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8123.561387883393!2d27.2910023!3d59.4015419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee3f812400317fbb!2sViru+College+of+Tallinn+University+of+Technology!5e0!3m2!1sen!2see!4v1547124070997" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
	</div>

<!--//contact-->
<!--brand-->
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
			</div>
			
		</div>

@stop