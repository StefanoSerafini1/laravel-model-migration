@extends('layouts.main')

@section('content')
    <h1>AutoCar</h1>

    <h2>Le nostre Automobili</h2>

    <ul>
        @foreach ($cars as $car)
            <li>
                <h3> {{ $car->modello }} </h3>
                <div class="brand">{{ $car->marca }}</div>
                <div class="plate">{{ $car->targa }}</div>
                @if (! $loop->last)
                    <hr>
                @endif
            </li>
        @endforeach
    </ul>
{{-- sezione bike con vue --}}

    <div id="app">
        <h2>Our Bikes</h2>
        <ul>
            <li v-for="bike in bikes">
                <h2>@{{bike.modello}}</h2>
                <p>@{{bike.marca}}</p>
                <p>@{{bike.targa}}</p>
            </li> 
        </ul>   
    </div>
@endsection