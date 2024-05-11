@extends('layouts.app')

@section('content')
<div class="mt-5 max-w-xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="aspect-w-16 aspect-h-9">
        <img class="object-cover object-center w-full h-full" src="{{ asset('images/' . $dinoProfiles->image_path) }}" alt="{{ $dinoProfiles->name }}">
    </div>
    <div class="px-6 py-4 bg-secondary">
        <h1 class="text-3xl font-bold text-black mb-2">{{ $dinoProfiles->name }}</h1>
        <div class="grid grid-cols-2 gap-x-6 text-black">
            <div class="flex flex-col">
                <span class="font-semibold">Species:</span>
                <span>{{ $dinoProfiles->species }}</span>
            </div>
            <div class="flex flex-col">
                <span class="font-semibold">Era:</span>
                <span>{{ $dinoProfiles->era }}</span>
            </div>
            <div class="flex flex-col">
                <span class="font-semibold">Diet:</span>
                <span>{{ $dinoProfiles->diet }}</span>
            </div>
            <div class="flex flex-col">
                <span class="font-semibold">Habitat:</span>
                <span>{{ $dinoProfiles->habitat }}</span>
            </div>
            <div class="flex flex-col col-span-2">
                <span class="font-semibold">Size:</span>
                <span>{{ $dinoProfiles->size }}</span>
            </div>
        </div>
        <div class="mt-4">
            <p class="text-lg text-black">{{ $dinoProfiles->description }}</p>
        </div>
    </div>
</div>
@endsection