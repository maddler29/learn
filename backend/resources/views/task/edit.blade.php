<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>作成画面</title>
</head>
<body>
<form method="post" action="{{ route('task.edit') }}">
    @csrf
    <input type="text" name="task" value="{{ $task }}">
    <input type="submit" name="送信">
</form>
</body>
</html>
