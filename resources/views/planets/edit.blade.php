<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報登録アプリ | id:{{ $planet->ja_name }}の編集</title>
</head>
<body>
    <h1>惑星情報編集</h1>
    <form action="/planets/{{ $planet->id }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label for="ja_name">名前</label>
            <input type="text" name="ja_name" value="{{ $planet->ja_name }}">
        </p>
        <p>
            <label for="en_name">名前(英名)</label>
            <input type="text" name="en_name" value="{{ $planet->en_name }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="number" name="radius" value="{{ $planet->radius }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="number" name="weight" value="{{ $planet->weight }}">
        </p>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>
