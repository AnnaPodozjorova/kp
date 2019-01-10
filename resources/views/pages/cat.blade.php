@extends('layouts.default')

@section('content')


    <h1 class="text-center ">{{$category->name}}</h1>
         

        @foreach ($subcategories as $subcategory)
            <!--Kontrollib kas kategoorias asub subCat, ja tagastab need -->
            @if($category->id == $subcategory->idCat)
                <li>{!! $subcategory->name !!}</li>

            @else 
            @endif
         @endforeach

@stop


