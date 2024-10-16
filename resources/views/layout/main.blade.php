<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.css'])
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
<header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div class="nav">
                    Нарушений нет
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="text">
                    ©Копирайт
                </div>
                <div class="text">
                    Лебедев Дмитрий Константинович
                </div>
                <div class="text">
                    2024.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>