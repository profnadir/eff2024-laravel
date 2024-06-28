<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('evenements.index') }}">Accueil</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
