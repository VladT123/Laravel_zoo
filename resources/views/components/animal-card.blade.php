@props(['animal'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">

        <div>
            <h3 class="text-2xl">
                <a href="/animals/{{$animal->id}}">{{$animal->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$animal->title}}</div>
            <div class="text-xl font-bold mb-4">{{$animal->age}} years old</div>
        </div>
    </div>
</div>