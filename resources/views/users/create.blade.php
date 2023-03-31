@extends('layouts.app')

@section('content')
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <br/>
    <h1>Inscription</h1>

    <br/>
    

    <form action="{{route('users.store')}}" method="post">
        @csrf
        
        <input type="first_name" name="first_name" placeholder="First_name">
        <input type="last_name" name="last_name" placeholder="Last_name">
        <input type="pseudo" name="pseudo" placeholder="Pseudo">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input class="button" type="submit" value="M'inscrire">
    </form>


</body>
</html>

@endsection