@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Lista dei Film : </h1>
     <div class="movies">

         @foreach ($movies as $currentMovie)
             <ul>
                 <li><span>Titolo : </span>{{$currentMovie->title}} </li>
                 <li><span>Titolo Originale : </span>{{$currentMovie->original_title}} </li>
                 <li><span>Nazionalità : </span>{{$currentMovie->nationality}}</li>
                 <li><span>Data di uscita : </span>{{$currentMovie->date}}</li>
                 <li><span>Voto della critica : </span>{{$currentMovie->vote}}</li>
             </ul>
         @endforeach

     </div>
</div>


@endsection