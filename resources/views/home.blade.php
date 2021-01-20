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
@endsection