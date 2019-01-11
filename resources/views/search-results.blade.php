
@extends('layouts.default')
@section('content')
@include('particals.airMessage')
<div class="banner-top">
	<div class="container">
		<h1>Otsingu Vastus</h1>
		<em></em>
		
	</div>
</div>

<h3>{{$subjects->total()}} result(s) for '{{request()->input('query')}}'</h3>
	<!--content-->
<div class="productions-section">
    <div class="container">
        <div class="productions-grid">
			@foreach ($subjects as $product)
			
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
	{{$subjects->links()}}
</div>

		</div>
@stop