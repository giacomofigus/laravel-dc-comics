@extends('layouts.app')

@section('main')
    <div>
        <h2 class="text-bold">{{$comic['titolo']}}</h2>
        <p>{{ $comic['descrizione'] }}</p>
    </div>

@endsection