@extends('app')

@section('title', config('app.name'))

    @section('content')
    <img src="{{ asset('img/flag_ivory.jpeg')}}" alt="Ivory Flag">
        
        <h1>Hello from Ivory Coast !</h1>

        <p>It's currently {{ date('H:i')}}.</p>

@endsection


