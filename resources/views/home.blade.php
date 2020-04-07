@extends('layouts.app')

@section('content')
    <div class="mx-auto font-bold my-8 text-center text-2xl">
        <h2>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h2>
    </div>
    <div class="grid grid-cols-5 gap-16 pt-16">
        @foreach($photos as $photo)
            @if($loop->iteration == 11)
                @break
            @endif
            <div>
                <img src="{{ $photo['url'] }}" alt="{{ $photo['title'] }}">
            </div>
        @endforeach
    </div>
@endsection
