@extends('layouts.app')

@section('content')
 
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Dino Profiles
            </h1>
        </div>
    </div>


    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif
    <?php
    $user_id;
    if (Auth::user() == null) {
        $user_id = 0;
    } else {
        $user_id = Auth::user()->id;
    }
    ?>
    @if ($user_id == 1)
        <div class="pt-15 w-4/5 m-auto">
            <a href="/gallery/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create Profile
            </a>
        </div>
    @endif
    <div id="gallery-container">
        @foreach ($dinoProfiles as $profile)
        <a href="/gallery/{{ $profile->slug }}">
            <img src="{{ asset('images/' . $profile->image_path) }}" width="700" alt="{{ $profile->name }}">
        </a>
        @endforeach
    </div>
@endsection
