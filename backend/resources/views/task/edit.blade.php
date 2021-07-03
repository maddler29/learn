<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>作成画面</title>
</head>
<body>
<form method="post" action="{{ route('task.update',$task->id) }}">
    @csrf
    <input type="text" name="task" value="{{ $task->task }}">
    <select name="category_id">
        <option value="">カテゴリーを選択</option>
        <!--選択肢を一つずつ表示させている-->
        @foreach($categories as $category_list)
            <option value="{{ $category_list->id }}">{{ $category_list->category }}</option>
        @endforeach
    </select>
    <input type="submit" value="登録">
</form>
</body>
</html>
