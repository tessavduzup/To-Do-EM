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
            <input type="text" name="title" placeholder="Название задачи" value="{{ old('title') }}">
            @error('title')
            <div style="color:red;">{{ $message }}</div>
            @enderror

            <br>
            <textarea name="description" placeholder="Описание задачи">{{old('description')}}</textarea>
            @error('description')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Создать задачу</button>
    </form>
</body>
</html>
