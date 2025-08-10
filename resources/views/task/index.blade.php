<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
</head>
<body>
    <h1>СПИСОК ЗАДАЧ</h1>
    <div>
        @foreach($tasks as $task)
            <li><a href="{{route('task.show', $task->id)}}">{{$task->title}}</a></li>
        @endforeach
    </div>

    <div>
        <a href="{{ route('task.create') }}">Добавить задачу</a>
    </div>
</body>
</html>
