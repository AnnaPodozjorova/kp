@extends('layouts.default')

@section('content')


<!--Subcat and its subjects -->
<h1 class="text-center ">{{$subcategory->name}}</h1>
      
        </ul> <ul class="dropdown">
        @foreach ($subjects as $subject)
            @if($subject->idSubCat == $subcategory->id)
                <li>{!! $subject->name !!} </li>
            @else 
            @endif    
        @endforeach
        </ul> 


@stop