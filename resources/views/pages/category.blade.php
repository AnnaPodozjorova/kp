@extends('layouts.default')

@section('content')


<li class="has-dropdown">
   <a href="{{ url('/Categories') }}">Categories</a>
       <ul class="dropdown">
         <!-- kategooriad -->
         @foreach ($categories as $category)
         <a href="{{URL::to('/Categories/cat/'.$category->id)}}">
         <li>{!! $category->name !!}</li></a>

            <ul class="dropdown">
            <!--SubKategooriad -->
            @foreach ($subcategories as $subcategory)
               <!--Kontrollib kas kategoorias asub subCat, ja tagastab need -->
               @if($category->id == $subcategory->idCat)
               <a href="{{URL::to('/Categories/subcat/'.$subcategory->id)}}">
                  <li>{!! $subcategory->name !!}</li> <a>
               @else 
               @endif
            @endforeach
            </ul> 
            
         @endforeach
      </ul> 
</li>


@stop
