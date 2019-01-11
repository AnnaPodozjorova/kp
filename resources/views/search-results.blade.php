
@extends('layouts.default')
@section('content')
@include('particals.airMessage')
<div class="banner-top">
	<div class="container">
		<h1>Search Results</h1>
		<em></em>
		
	</div>
</div>

	<!--content-->
		<div class="product">
			<div class="container">
            <h3>{{$subjects->total()}} result(s) for '{{request()->input('query')}}'</h3>
			<div class="col-md-15">
				<div class="mid-popular">
				@foreach($subjects as $subject)
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="images/pc.jpg" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"></i></a>
						<a href="{{URL::to('/single/'.$subject['id'])}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
						
							<h6><a > {{ $subject->name }}</a></h6>
							</div>
							<div class="img item_add">
							<a href="#"><img src="images/ca.png" alt=""></a>
								<a href="#"><img src="{{ $subject->cover }}" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price">{{ $subject->price }}$</em></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
						
						</div>
					</div>
					</div>
					@endforeach
	
			
</div>
			<div class="clearfix"></div>
			</div>
				<!--pagination-->
				<div class="text-center">
	{{$subjects->links()}}
</div>



		</div>
	<!--//content-->
		<!--//footer-->
@stop