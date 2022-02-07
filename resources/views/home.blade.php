@extends('layouts.base')

@section('pageTitle')

    Home
    
@endsection

@section('content')

    <main class="main">

        
        @foreach ($movies as $movie)
    
            <div class="card">
                <li>{{$movie['title']}}</li>
            </div>
                
        @endforeach

    </main>
    
@endsection



