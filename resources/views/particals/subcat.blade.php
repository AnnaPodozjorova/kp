

@extends('layouts.default')


@section('content')
<!--Air message -->
@include('particals.airMessage')

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>{{$subcategory->name}}</h1>
		<em></em>
		<h2><a href="{{ url('/')}}">Kunstipood</a><label>/</label>{{$subcategory->name}}</h2>
	</div>
</div>


<div class="productions-section">
    <div class="container">
        <div class="productions-grid">
		@foreach ($Subjects as $subject)
		
				@if($subject['idSubCat'] == $subcategory->id)
                <a href="{{URL::to('/single/'.$subject['id'])}}" class="productions-product">
                    <img src="{{$subject['cover']}}" alt=""  height="150" width="170">
                    <div class="productions-product-name">{{ $subject['name'] }}</div>
					<div class="productions-product-name">{{ $subject['price'] }}$</div>
				</a>
				@else 
        @endif  
            @endforeach
        </div>
    </div>
</div>

</div>
				
		<!--//footer-->
@stop