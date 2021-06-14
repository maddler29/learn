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
            <td>
                <!--エラー発生
                Missing required parameter for [Route: task.delete] [URI: delete/{id}]
                次を追加　$task->id
                -->
                <form method="post" action="{{ route('task.delete', $task->id) }}">
                    @csrf
                    <input type="submit" value="削除">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('task.create') }}">タスクを追加する</a>
    <a href="{{ route('task.edit') }}">タスクを編集する</a>
</body>
</html>
