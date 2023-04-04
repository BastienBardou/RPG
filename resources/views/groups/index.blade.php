@extends('layouts.app')

@section('content')
<h1>Voici vos groupes</h1>



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
    @foreach ($groups as $group)
        <div class="card">
            <h2>{{ $group->name }}</h2>
            <p>{{ $group->description }}</p>
            <p>{{ $group->size }}</p>
            <form action="{{ route('groups.destroy', $group->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="button" type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach
</div>
    
</body>
</html>

@endsection