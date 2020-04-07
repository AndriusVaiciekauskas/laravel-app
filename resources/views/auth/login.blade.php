@extends('layouts.app')

@section('content')
<div class="w-full max-w-md m-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-32" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input name="email" class="shadow appearance-none @error('email') border-red-500 @enderror border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" value="{{ old('email') }}" type="text" placeholder="Email">
            @error('email')
            <p class="text-red-500 text-xs italic">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input name="password" class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            @error('password')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                {{ __('Login') }}
            </button>
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;ADev. All rights reserved.
    </p>
</div>
@endsection
