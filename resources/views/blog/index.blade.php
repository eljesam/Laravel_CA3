@extends('layouts.app')

@section('content')
<div class="w-full mx-auto text-center">
    <div class="py-10 border-b border-gray-200">
        <h1 class="text-5xl font-bold text-white">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 mx-auto mt-8">
        <p class="text-2xl text-white bg-green-500 rounded-lg py-4 px-6">{{ session()->get('message') }}</p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-8 w-4/5 mx-auto">
        <a href="/blog/create" class="bg-secondary text-white text-lg font-semibold uppercase py-3 px-6 rounded-3xl">Create Post</a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="flex flex-col md:flex-row items-center justify-between w-4/5 mx-auto py-12 border-b border-gray-200">
        <div class="md:w-1/2">
            <img class="rounded-lg w-full md:w-4/5 mx-auto mb-8 md:mb-0" src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}">
        </div>
        <div class="md:w-1/2 bg-accent rounded-lg p-8 md:ml-8">
            <h2 class="text-4xl font-bold text-white mb-4">{{ $post->title }}</h2>
            <p class="text-xl text-white mb-4">{{ $post->description }}</p>
            <div class="flex items-center justify-between text-white">
                <p>By <span class="font-bold">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <div class="flex items-center space-x-4">
                        <a href="/blog/{{ $post->slug }}/edit" class="text-gray-200 hover:text-white font-semibold text-lg">Edit</a>
                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-200 hover:text-red-400 font-semibold text-lg">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
            <a href="/blog/{{ $post->slug }}" class="mt-6 inline-block bg-secondary text-white text-lg font-semibold py-3 px-8 rounded-lg transition duration-300 ease-in-out hover:bg-gray-800">Keep Reading</a>
        </div>
    </div>
@endforeach

@endsection