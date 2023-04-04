@extends('layouts.app')

@section('content')
    <h1>Création de Personnage</h1>
<br>


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
   

    
    <form action="{{route('characters.store')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <label for="speciality">Choisissez la spécialité:</label>
            <select name="speciality" id="speciality">
                <option value="">--Choisissez la spécialité--</option>
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berserker">Berserker</option>
                <option value="Archer">Archer</option>
            </select>
            <p class="card">Magie <input name="magie" class="stat" type="text" value="{{ $mag }}" readonly></p>                     
            <p class="card">Force <input name="force" class="stat" type="text" value="{{ $for }}" readonly></p>                    
            <p class="card">Agilité <input name="agilite" class="stat" type="text" value="{{ $agi }}" readonly></p>                     
            <p class="card">Intel <input name="intelligence" class="stat" type="text" value="{{ $int }}" readonly></p>                     
            <p class="card">PV <input class="stat" name="PV" type="text" value="{{ $pv }}" readonly></p>
            <br/>
            <br/>

            <input class="button" type="submit" value="Générer des stats">
            <input class="button" type="submit" value="Créer">
    </form>


</body>
</html>

@endsection