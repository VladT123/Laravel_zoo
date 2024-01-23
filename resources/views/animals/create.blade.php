@extends('layout')

@section('content')
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Add an animal
        </h2>
    </header>
    <form method="POST"action="/animals">
        @csrf
        <div class="mb-6">
            <label
                for="name"
                class="inline-block text-lg mb-2">Name</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"/>
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                    
        </div>

        <div class="mb-6">
            <label for="title" 
            class="inline-block text-lg mb-2">Type of animal</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Example: Lion, shark, ant, etc"/>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
        </div>

        <div class="mb-6">
            <label
                for="age"
                class="inline-block text-lg mb-2"
                >age</label>
            <input
                type="number"
                class="border border-gray-200 rounded p-2 w-full"
                name="age"/>
                @error('age')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2">
                Animal Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="How animal looks and its defining characteristics"></textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Add animal
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>
@endsection