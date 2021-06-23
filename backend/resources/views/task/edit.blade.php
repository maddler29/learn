<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集画面</title>
</head>
<body>
    <form method="get" action="{{ route('task.edit') }}">
        @csrf
        <input type="text" name="task">
        <input type="submit" name="登録">
</form>
</body>
</html>
