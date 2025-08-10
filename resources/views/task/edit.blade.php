<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создать задачу</title>
</head>
<body>
<form action="{{route('task.update', $task)}}" method="post">
    @csrf
    @method('put')
    <div>
        <input type="text" name="title" placeholder="Название задачи" value="{{$task->title}}">
        <br>
        <textarea name="description" placeholder="Описание задачи">{{ $task->description }}</textarea>
    </div>
    <button type="submit">Обновить</button>
</form>
</body>
</html>
