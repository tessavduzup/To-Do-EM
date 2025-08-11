<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h3>{{$task->title}}</h3>
    <br>
    <h3>Описание: {{$task->description}}</h3>

    <br>
    <a href="{{ route('task.edit', $task) }}">Редактировать</a>
    <br>
    <form action="{{ route('task.destroy', $task) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить">
    </form>
    <a href="{{ route('task.index') }}">Назад</a>
</body>
</html>
