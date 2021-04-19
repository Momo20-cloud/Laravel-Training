@extends('app')

@section('title', config('app.name'))

    @section('content')
    <img src="{{ asset('img/flag_ivory.jpeg')}}" alt="Ivory Flag">
        
        <h1 class="text-5xl fonts-semibold text-indigo-600">Hello from Ivory Coast !</h1>

        <p class="text-lg text-gray-800">It's currently {{ date('H:i')}}.</p>

@endsection


