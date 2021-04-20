 @extends('layouts.app', ['Title'=> 'About Us'])        
        
@section('content')
<img src="{{ asset('img/igs2_flag.png')}}" alt="IGS SCHOOL Flag" class="my-12 rounded-full shadow-nd">
<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span> by Student's of IGS SCHOOL</h2>
            
<p class="">
    <a href="{{route('home')}}" class="text-indigo-500  hover:text-indigo-600 underline">Revenir a la page d'accueil</a>
</p>
@endsection