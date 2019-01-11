@extends('layouts.default')


@section('content')

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Search Results</h1>
		<em></em>
		
		<h2>{{$subjects->total()}} result(s) for '{{request()->input('query')}}'</h2>
	</div>
</div>

<!--Air message -->
@include('particals.airMessage')

	<!--content-->
			<div class="search-container container">
				
				<table class="table table-bordered table-striped">
            <thead>
                <tr>
					<th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
					<th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
						<th><a href="{{URL::to('/single/'.$subject['id'])}}">{{ $subject->id }}</a></th>
                        <th><a href="{{URL::to('/single/'.$subject['id'])}}">{{ $subject->name }}</a></th>
                        <td>{{ $subject->description }}</td>
                        <td>{{ $subject->quantity }}</td>
                        <td>{{ $subject->price }}</td>
                    </tr>
                @endforeach
            </tbody>	
        </table>
		{{ $subjects->appends(request()->input())->links() }}

			</div><!--end search-container-->
@stop