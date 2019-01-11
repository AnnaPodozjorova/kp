@extends('layouts.default')


@section('content')


<div class="banner-top">
	<div class="container">
		<h1>Ostukorv</h1>
		<em></em>
		
	</div>
</div>


<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Toode</th>
            <th style="width:10%">Hind</th>
            <th style="width:8%">Kogus</th>
            <th style="width:22%" class="text-center">Summa</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Subjects as $row)
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{$row->cover}}" alt="..." class="img-responsive"/></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{$row->name}}</h4>
                        <p>{{$row->description}}</p>
                    </div>
                </div>
            </td>
            <td data-th="Price">{{$row->price}}</td>
            <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
            </td>
            <td data-th="Subtotal" class="text-center">{{$row->price}}</td>
            <td class="actions" data-th="">
                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        </tbody> @endforeach
        <tfoot>
        <tr class="visible-xs">
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Jätka ostu</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total: 25.30</strong></td>
        </tr>
        </tfoot>
    </table>


        </div>

    </div> <!-- end cart-section -->
   @include('particals.might-like')
@endsection
