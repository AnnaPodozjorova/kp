

@extends('layouts.default')


@section('content')
<!--Air message -->
@include('particals.airMessage')

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>{{$subcategory->name}}</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Home</a><label>/</label>{{$subcategory->name}}</h2>
	</div>
</div>

	<!--content-->
		<div class="product">
			<div class="container">

			<div class="col-md-15">
				<div class="mid-popular">
                @foreach ($subjects as $subject)
                @if($subject->idSubCat == $subcategory->id)
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="images/pc.jpg" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"></i></a>
                        <!-- url to single.blade(single MenuController'is peab olema)-->
						<a href="{{ url('/product')}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
						
							<h6><a > {!! $subject->name !!}</a></h6>
							</div>
							<div class="img item_add">
							<a href="#"><img src="images/ca.png" alt=""></a>
								<a href="#"><img src="{!! $subject->cover !!}" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price">{!! $subject->price !!}$</em></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
						
						</div>
					</div>
					</div>
                    @else 
        @endif  
					@endforeach
	
			
<!--//menu-->
 	 				 
				 
					
					 <!---->
					
				   		
		</div>
			<div class="clearfix"></div>
			</div>
				<!--products-->
			
			<!--//products-->
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
	<!--//content-->
		<!--//footer-->
@stop