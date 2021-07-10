<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>todolist</title>
</head>
<body>
    <table>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->category}}</td>

                <td>
                    <form method="get" action="{{ route('category.edit',[$category->id]) }}">
                        <input type="submit" value="編集">
                    </form>
                </td>
                <td>
                    <form method="post" action="{{ route('category.delete',[$category->id]) }}">
                        @csrf
                        <input type="submit" value="削除">
                        <input type="hidden" name="_method" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        <a href="{{ route('category.create') }}">カテゴリを追加する</a>
    <table>
        <tr>
            <th>今日何にする</th>
            <th>カテゴリ</th>
            <th>状態</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->task }}</td>
            <td>
                @if($task->category)
                    {{ $task->category->category }}
                @endif
            </td>
            <!--状態管理 作業・完了切り替え-->
            <form action="{{ route('task.status.update', [$task->id]) }}" method="POST">
            @csrf
            @if($task->status == 1)
                <!-- 作業中ボタン -->
                    <td>完了</td>
                    <td><input class="unCompleted" type="submit" value="作業中にする"></td>
                    <input type="hidden" name="status" value="0">
            @else
                <!-- 完了ボタン -->
                    <td>作業中</td>
                    <td><input class="completed" type="submit" value="完了にする"></td>
                    <input type="hidden" name="status" value="1">
            @endif
            </form>
            <!--状態管理 重要であるかそうでないか-->
            <form action="{{ route('task.favorite.update', [$task->id]) }}" method="POST">
            @csrf
            @if($task->favorite == 1)
                <!-- 重要ではないボタン -->
                    <td>重要</td>
                    <td><input class="not important" type="submit" value="重要ではない"></td>
                    <input type="hidden" name="favorite" value="0">
            @else
                <!-- 重要であるボタン -->
                    <td>重要ではない</td>
                    <td><input class="important" type="submit" value="重要にする"></td>
                    <input type="hidden" name="favorite" value="1">
                @endif
            </form>
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
