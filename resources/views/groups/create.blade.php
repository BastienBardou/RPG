@extends('layouts.app')

@section('content')
    <h1>Création de Groupe</h1>
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
   
    <form action="{{route('groups.store')}}" method="post">
        @csrf

        <p> Name<input type="text" name="name" placeholder="Name"></p>
       <p>Description <input type="text" name="description" placeholder="Description"></p>
       <p>Size <input type="text" name="size" placeholder="Nombre de Places"></p>
          
            <input class="button" type="submit" value="Créer">
    </form>

</body>
</html>

@endsection