 @extends('app')
        
@section('title', 'About Us | ' .config('app.name'))
        
        
@section('content')
<img src="{{ asset('img/igs2_flag.png')}}" alt="IGS SCHOOL Flag">
<p>Built with <span class="text-pink-500">&hearts;</span> by Student's of IGS SCHOOL</p>
            
<p>
    <a href="{{route('home')}}">Revenir a la page d'accueil</a>
</p>
@endsection