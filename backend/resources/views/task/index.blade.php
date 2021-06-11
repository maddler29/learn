<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">

    <title>todolist</title>
</head>
<body>
    <table>
        <tr>
            <th>今日何にする</th>
            <th>チェックボックス</th>
            <th>編集</th>
            <th>タブ管理</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->task }}</td>
            <td>リスト名</td>
            <td>リスト名</td>
            <td>リスト名</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('task.create') }}">タスクを追加する</a>
</body>
</html>
