@extends('layouts.default')


@section('content')
<!--Air message -->
@include('particals.airMessage')

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Home</a><label>/</label>Products</h2>
	</div>
</div>

<div class="productions-section">
    <div class="container">
        <div class="productions-grid">
            @foreach ($Subjects as $product)
                <a href="{{URL::to('/single/'.$product['id'])}}" class="productions-product">
                    <img src="{{$product['cover']}}" alt=""  height="150" width="170">
                    <div class="productions-product-name">{{ $product->name }}</div>
					<div class="productions-product-name">{{ $product->price }}$</div>

                </a>
            @endforeach
        </div>
    </div>
</div>

		</div>
			<div class="clearfix"></div>
			</div>
				<!--pagination-->
				<div class="text-center">
	{{$Subjects->links()}}
</div>



		</div>
	<!--//content-->
		<!--//footer-->
@stop