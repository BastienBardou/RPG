
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rise of Heroes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('home') }}" class="navbar-brand">The Rise Of Heroes</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('characters.index') }}" class="nav-link">Mes personnages</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('groups.index') }}" class="nav-link">Mes groupes</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('characters.catalog') }}" class="nav-link">Catalogue de personnages</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('teams.index') }}" class="nav-link">Mes équipes</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">Déconnexion</a>
          </li>
        </ul>
      </nav>

      <img class="brand" src="https://thumbs.dreamstime.com/b/sketch-hand-drawn-game-races-classes-mmorpg-games-dark-elf-assassin-thief-druid-priest-fire-mage-238179110.jpg" alt="MMORPG Races and Classes" style="width:100%;">
      

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
