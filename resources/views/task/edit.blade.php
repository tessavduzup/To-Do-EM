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
        <input type="text" name="title" placeholder="Название задачи" value="{{old('title', $task->title)}}">
        @error('title')
        <div style="color:red;">{{ $message }}</div>
        @enderror
        <br>
        <textarea name="description" placeholder="Описание задачи">{{old('description', $task->description)}}</textarea>
        @error('description')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Обновить</button>
</form>
</body>
</html>
