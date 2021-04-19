 @extends('app')
        
@section('title', 'About Us | ' .config('app.name'))
        
        
@section('content')
<img src="img/igs2_flag.png" alt="Ivory Flag">

<p>Built with &hearts; by Student's of IGS SCHOOL</p>
            
<p><a href="{{route('home')}}">Revenir a la page d'accueil</a></p>
@endsection