@extends('layouts.app')

@section('content')
<main class="container mx-auto max-w-lg mt-10">
    @if(count($errors) > 0)
    <div style="color:red">
        @foreach ($errors->all() as $message)
            <ul>
                <li>{{$message}}</li>
            </ul>
        @endforeach
    </div>
    @endif
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white border rounded-md shadow-sm">

                <header class="font-semibold bg-accent text-white py-5 px-6 sm:px-8 rounded-t-md text-2xl">
                    {{ __('Register') }}
                </header>

                <form class="px-6 space-y-6 sm:px-8 sm:space-y-8" method="POST"
                    action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full border-secondary focus:border-primary @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full border-secondary focus:border-primary @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full border-secondary focus:border-primary @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full border-secondary focus:border-primary"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <input type="file" name="icon" id="icon" class="sr-only">
                        <label for="icon" class="cursor-pointer bg-secondary text-white py-2 px-4 rounded-lg border border-gray-300">
                            <svg class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg> Choose profile image
                        </label>
                        <span id="icon-label" class="ml-2"></span>
                        @error('icon')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold p-3 rounded-lg text-base leading-normal text-white bg-accent hover:bg-primary">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>

<script>
    const iconInput = document.getElementById('icon');
    const iconLabel = document.getElementById('icon-label');
    iconInput.addEventListener('change', function() {
        iconLabel.textContent = this.files[0].name;
    });
</script>
@endsection
