@extends('layouts.app')

    @section('content')
    <img src="{{ asset('img/flag_ivory.jpeg')}}" alt="Ivory Flag" class="mt-12 rounded shadow-nd h-32">
        
        <h1 class="mt-5 text-3xl sm:text-5xl fonts-semibold text-indigo-600">Hello from Ivory Coast !</h1>

        <p class="text-lg text-gray-800">It's currently {{ date('H:i')}}.</p>

@endsection


