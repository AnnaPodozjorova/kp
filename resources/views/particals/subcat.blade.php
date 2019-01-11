
@extends('layouts.default')

@section('content')
<!--Air message -->
@include('particals.airMessage')

<h1 class="text-center ">{{$subcategory->name}}</h1>
      
    </ul> <ul class="dropdown">
    @foreach ($subjects as $subject)
        @if($subject->idSubCat == $subcategory->id)
            <li>{!! $subject->name !!} {!! $subject->idSubCat !!}</li>
        @else 
        @endif    
    @endforeach
    </ul> 
@stop