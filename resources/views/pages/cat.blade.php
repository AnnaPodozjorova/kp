@extends('layouts.default')
@section('content')


    <h1 class="text-center ">{{$category->name}}</h1>


    @foreach ($subcategories as $subcategory)
        
            <!--Kontrollib kas kategoorias asub subCat, ja tagastab need -->
            @if($category->id == $subcategory->idCat)
            <a href="{{URL::to('/Categories/subcat/'.$subcategory->id)}}">
                <li>{!! $subcategory->name !!}</li> </a>
                 
            @else 
            @endif
         @endforeach

@stop

