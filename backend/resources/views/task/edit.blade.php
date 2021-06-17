<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>作成画面</title>
</head>
<body>
<form method="post" action="{{ route('task.update',$task1->id) }}">
    @csrf
    <input type="text" name="task" value="{{ $task1->task }}">
    <input type="submit" value="登録">
</form>
</body>
</html>
