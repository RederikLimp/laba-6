<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        .auth-links, .news-column {
            margin-bottom: 20px;
        }
        h1, h2 {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-links">
            @if (Auth::user())
                <h1><a href="/logout">Выйти</a></h1>
                <h1><a href="/makenew">Сделать новость</a></h1>
                <p>{{ Auth::user()->login }}</p>
            @else
                <h1><a href="/register">Регистрация</a></h1>
                <h1><a href="/login">Войти</a></h1>
            @endif
        </div>

        <div class="news-column">
            @if ($news)
                <h1>Новости</h1>
                @foreach ($news as $new)
                    <h2><a href="new/{{ $new->id }}">{{ $new->title }}</a></h2>
                    <p>{{ $new->created_at }}</p>
                @endforeach
            @else
                <p>Новостей нет</p>
            @endif
        </div>
    </div>
</body>
</html>