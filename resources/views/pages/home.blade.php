@extends('app')

@section('title', config('app.name'))

    @section('content')
    <img src="img/flag_ivory.jpeg" alt="Ivory Flag">
        
        <h1>Hello from Abidjan !</h1>

        <p>It's currently {{ date('H:i')}}.</p>

@endsection


