@extends('app')

@section('title', config('app.name'))

    @section('content')
        
        <h1>Hello from Abidjan !</h1>

        <p>It's currently {{ date('H:i')}}.</p>

@endsection


