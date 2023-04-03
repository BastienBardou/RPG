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
            <label>Magie<label>
            <input type="number" name="mag" id="mag" placeholder="mag">
            <label>Force<label>
            <input type="number" name="for" id="for" placeholder="for">
            <label>Agilité<label>
            <input type="number" name="agi" id="agi" placeholder="agi">
            <label>Intelligence<label>
            <input type="number" name="int" id="int" placeholder="int">
            <label>Points de vie<label>
            <input type="number" name="pv"id="pv" placeholder="pv">

            <input class="button" type="submit" value="Générer des stats" onclick="generateStats()">
            <input class="button" type="submit" value="Créer">
    </form>
<script>
        function generateStats() {
            document.getElementById('mag').value = Math.floor(Math.random() * 14);
            document.getElementById('for').value = Math.floor(Math.random() * 14);
            document.getElementById('agi').value = Math.floor(Math.random() *  14);
            document.getElementById('int').value = Math.floor(Math.random() *  14);
            document.getElementById('pv').value = Math.floor(Math.random() * 50);
        }
</script>²

</body>
</html>

@endsection