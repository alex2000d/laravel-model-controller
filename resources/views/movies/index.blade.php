@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">I film di Boolean</h1>
            </div>
                @foreach ($movies as $movie)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mt-3">
                        <p class="text-center text-primary"> {{$movie['title']}}</p>
                        <p class="ms-2"> titolo originale = {{$movie['original_title']}}</p>
                        <p class="ms-2"> nazionalità =  {{$movie['nationality']}}</p>
                        <p class="ms-2"> data di uscita = {{$movie['date']}}</p>
                        <p class="ms-2"> voto = {{$movie['vote']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection