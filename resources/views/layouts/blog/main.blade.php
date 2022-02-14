<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="/" class="nav-link link-dark px-2 active" aria-current="page">Домашняя</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Фичи</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Баги</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Факи</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">О нас</a></li>
            </ul>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Вход</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Регистрация</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
