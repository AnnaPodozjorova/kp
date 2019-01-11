@extends('layouts.default')

@section('content')

<!--Air message -->
@include('particals.airMessage')

<div class="banner-top">
	<div class="container">
		<h1>Kunstipood</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Home</a><label>/</label>Product</h2>
	</div>
</div>

<div class="single">

<div class="container">
	@foreach($Products as $row)
	@if ($row['id'] == request()->route('id'))
<div class="col-md-15">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/si.jpg">
			        <div class="thumb-image"> <img src="{{$row['cover']}}" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3>{{$row['name']}}</h3>
				<p class="in-para"></p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">{{$row['price']}}$</span>
				 <div class="clearfix"></div>
				</div>
				<h4 class="quick">Ülevaade:</h4>
				<p class="quick_desc"> {{$row['description']}}</p>

				 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
							<!--quantity-->
	<script>
    $('.value-plus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    	divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    	if(newVal>=1) divUpd.text(newVal);
    });
	</script>
	<!--quantity-->
				 
			    <a href="#" class="add-to item_add hvr-skew-backward">Add to cart</a>
			<div class="clearfix"> </div>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Product Description</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Quantity</a></li> 
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p >{{$row['description']}} </p>
										     
							        </div>

</div>
<div class="tab-pane text-style" id="tab2">
	
									<div class="facts">									
										<p > {{$row['quantity']}} </p>
										
							        </div>	

</div>
<div class="tab-pane text-style" id="tab3">

									 <div class="facts">
									  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
										
							     </div>	

 </div>
  
  </div>
  <div class="clearfix"></div>
  </div>
			<!---->	
</div>
<!----->

@endif
    @endforeach
<div class="col-md-3 product-bottom product-at">
			<!--categories-->
			
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
 
			
				   	
		</div>
		<div class="clearfix"> </div>
	</div>
	
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
		


@stop
