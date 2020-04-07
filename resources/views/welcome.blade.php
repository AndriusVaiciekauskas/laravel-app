@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-4 gap-4 h-screen">
        <div></div>
        <div class="m-auto">
            <a class="btn-blue-outline-big" href="{{ route('login') }}">{{ __('Login') }}</a>
        </div>
        <div class="m-auto">
            <a class="btn-blue-outline-big" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
        <div></div>
    </div>
@endsection
