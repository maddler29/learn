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
            <th>カテゴリ</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->task }}</td>
            <td>{{ $task->category->category }}</td>

            <td>
                <form method="get" action="{{ route('task.edit', [$task->id]) }}">
                    @csrf
                    <input type="submit" value="編集">
                </form>
            </td>
            <td>
                <!--エラー発生
                Missing required parameter for [Route: task.delete] [URI: delete/{id}]
                次を追加　$task->id
                -->
                <form method="post" action="{{ route('task.delete', $task->id) }}">
                    @csrf
                    <input type="submit" value="削除">
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <a href="{{ route('task.create') }}">タスクを追加する</a>

</body>
</html>
