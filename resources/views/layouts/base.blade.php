<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/bonjour/$name">Bonjour</a></li>
        <li><a href="/good-bye">Aurevoir</a></li>
        <li><a href="/a-propos">A propos</a></li>
    </ul>
    @yield('content')
</body>
</html>