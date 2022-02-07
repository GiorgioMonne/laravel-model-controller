@extends('layouts.base')

@section('pageTitle')

    Home
    
@endsection

@section('content')

    <main class="main">

        <div class="container">

            @foreach ($movies as $movie)
    
            <div class="card">
                <h3>Nome film: {{$movie['title']}}</h3>
                <h3>Nome Originale: {{$movie['original_title']}}</h3>
                <h3>Nazionalitè: {{$movie['nationality']}}</h3>
                <h3>Data uscita: {{$movie['date']}}</h3>
                <h3>Voto giuria: {{$movie['vote']}}</h3>

            </div>
                
            @endforeach

        </div>

    </main>
    
@endsection



