@extends('layouts.app')

@section('content')
<h1>Voici vos personnages</h1>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<div class="card-container">
    @foreach ($characters as $character)
        <div class="card">
            <h2>{{ $character->name }}</h2>
            <p class="speciality">{{ $character->speciality }}</p>
            <p>{{ $character->description }}</p>
            <ul class="stats">
                <li class="mag">Magie: {{ $character->mag }}</li>
                <li class="for">Force: {{ $character->for }}</li>
                <li class="agi">Agilité: {{ $character->agi }}</li>
                <li class="int">Intelligence: {{ $character->int }}</li>
                <li class="pv">Points de Vie: {{ $character->pv }}</li>
            </ul>
            <form action="{{ route('characters.destroy', $character->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="button" type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach
</div>
<br/>
<br/>
<br/>
    
</body>
</html>

@endsection