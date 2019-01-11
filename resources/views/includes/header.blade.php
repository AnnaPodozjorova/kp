<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="{{ url('/')}}"><img src="images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><a href="{{ url('/login')}}">Siene</a></li>
						<li><a href="{{ url('/register')}}">Reristreeru</a></li>
						
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >

						<li><a href="{{ url('/cart')}}" ><i class="glyphicon glyphicon-shopping-cart" ></i></a></li>
						<li><a href="{{ url('/cart')}}" ><i> Ostukorv</i></a></li>
						<li><a href="#" ><i ></i></a></li>
						<li><a href="#" ><i ></i></a></li>
						<li><a href="{{ url('/Checkout')}}" ><i> Checkout</i></a></li>
						<li><a href="#" ><i ></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="{{ url('/')}}">Home	</a></li>
        
       
			<li class="dropdown mega-dropdown active">
			@foreach ($categories as $category)
				<li>
			    <a class="color1" href="" class="dropdown-toggle" data-toggle="dropdown">{{$category->name}} <span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav"> 
							
									@foreach ($subcategories as $subcategory)
              						 @if($category->id == $subcategory->idCat)
               						<ul>	<li><a href="{{URL::to('Categories/subcat/'.$subcategory->id)}}">
										   {!! $subcategory->name !!}</a></li> </ul>
               						@else 
               						@endif
									@endforeach
							</div>							
						</div>
				
						<div class="col1 col5">
						<img src="images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>	
			</li>
				@endforeach				
			</li> <!--End dropdown category -->

			
			<li><a class="color3" href="{{ url('/product')}}">Tooted</a></li>
			<li><a class="color4" href="{{ url('/Error404')}}">About</a></li>
            <li ><a class="color6" href="{{ url('/contact')}}">Kontakt</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
			
					</ul>
					<div class="cart box_1">
                     @include('particals.search')

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>