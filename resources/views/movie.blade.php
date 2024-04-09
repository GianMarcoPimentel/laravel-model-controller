@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Lista dei Film : </h1>

    @foreach ($movies as $currentMovie)
        <ul>
            <li> {{$currentMovie->title}} </li>
            <li>{{$currentMovie->original_title}} </li>
            <li>{{$currentMovie->nationality}}</li>
            <li>{{$currentMovie->date}}</li>
            <li>{{$currentMovie->vote}}</li>
        </ul>
    @endforeach
</div>


@endsection