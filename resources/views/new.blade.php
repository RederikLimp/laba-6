<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$news->title}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .author, .date {
            font-size: 0.9em;
            color: #999;
        }
        .news-image {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }
        .comments {
            margin-top: 40px;
        }
        .comment {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }
        .comment p {
            margin: 5px 0;
        }
        .comment .date {
            font-size: 0.8em;
            color: #bbb;
        }
        form {
            margin-top: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
        }
        form p {
            margin-bottom: 10px;
        }
        form input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
        form button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="/">Назад</a>
    <h1>{{$news->title}}</h1>
    <p class="author">Автор: {{$creator->login}}</p>
    <p class="date">{{$news->created_at}}</p>
    <p>{{$news->text}}</p>

    @if ($img)
        <img class="news-image" src="{{asset('images/'.$img->url)}}" alt="">
    @endif

    <div class="comments">
        @if (count($comments) != 0)
            @foreach ($comments as $com)
                <div class="comment">
                    <p>{{$com->text}}</p>
                    <p class="date">{{$com->created_at}}</p>
                </div>
            @endforeach
        @endif
    </div>

    <form action="" method="post">
        <p>Напишите комментарий</p>
        @csrf
        <input type="text" name="text">
        <input type="hidden" name="new_id" value="{{$news->id}}">
        <button type="submit">Отправить</button>
    </form>
</div>

</body>
</html>