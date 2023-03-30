<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">RPG Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('characters.index') }}">Mes personnages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('groups.index') }}">Mes groupes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('characters.catalog') }}">Catalogue de personnages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('teams.index') }}">Mes équipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
        </li>
      </ul>
    </div>
  </nav>


</body>
</html>