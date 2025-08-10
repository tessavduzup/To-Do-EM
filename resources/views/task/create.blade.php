<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создать задачу</title>
</head>
<body>
    <form action="{{route('task.store')}}" method="post">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Название задачи">
            <br>
            <textarea name="description" placeholder="Описание задачи"></textarea>
        </div>
        <button type="submit">Создать задачу</button>
    </form>
</body>
</html>
