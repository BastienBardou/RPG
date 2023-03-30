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
    <h1>Veuillez Vous Connectez <h1>
        <br/>

    <form action="{{route('login.auth')}}" method="post">
        @csrf
        
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input class="button" type="submit" value="Me connecter">
    </form>


</body>
</html>

@endsection