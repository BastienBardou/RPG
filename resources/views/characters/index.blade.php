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
    
    <div>
        @foreach ($characters as $character)
            <p> Name {{ $character->name }} </p>
            <p> Magie {{ $character->mag }}</p>
        @endforeach
    </div>
    
</body>
</html>

@endsection