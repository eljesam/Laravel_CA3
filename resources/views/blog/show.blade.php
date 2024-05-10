@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto text-left">
    <div class="py-8">
        <h1 class="text-5xl md:text-6xl font-bold">{{ $post->title }}</h1>
    </div>
    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full rounded-lg">
    <div class="pt-8">
        <span class="text-lg md:text-xl text-gray-500 block">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>
        <p class="text-xl md:text-2xl text-gray-700 leading-8 mt-4">{{ $post->content }}</p>
    </div>
</div>
@endsection 