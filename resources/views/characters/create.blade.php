@extends('layouts.app')

@section('content')
    <h1>Bienvenue sur RPG Manager !</h1>
    <p>Connectez-vous pour commencer à jouer.</p>
@endsection


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
    <h1>Characters</h1>

    
    <form action="{{route('users.store')}}" method="post">
        @csrf

        <input type="name" name="name" placeholder="Name">
        <input type="description" name="description" placeholder="Description">
        <label for="speciality">Choisissez la spécialité:</label>
            <select name="speciality" id="speciality">
                <option value="">--Choisissez la spécialité--</option>
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berserker">Berserker</option>
                <option value="Archer">Archer</option>
                <button type="submit" value="Valider"></button>
    </form>


</body>
</html>