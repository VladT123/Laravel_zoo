@extends('layout')

@section('content')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($animals)==0)
<p>Zoo is empty</p>
@endif

@foreach ($animals as $animal)
<x-animal-card :animal="$animal" />
@endforeach
<div class="">
   {{$animals->links()}} 
</div>
@endsection