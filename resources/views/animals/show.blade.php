@extends('layout')

@section('content')
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div
            class="flex flex-col items-center justify-center text-center">
            <h3 class="text-2xl mb-2">{{$animal->name}}</h3>
            <div class="text-xl font-bold mb-4">{{$animal->title}}</div>
            <div class="text-lg my-4">
                <i class="fa-solid fa-gear"></i> {{$animal->age}} years old
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Description
                </h3>
                <div class="text-lg space-y-6">
                    <p> {{$animal->description}}</p>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="/animals/{{$animal->id}}">
        @csrf
        @method('DELETE')
        @auth
        <button class="text-red-500"><i class="fa-solid fa-trash">DELETE</i>
        @endauth
    </form>
</div>

@endsection