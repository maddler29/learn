<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>作成画面</title>
</head>
<body>
    <form method="post" action="{{ route('task.store') }}">
        @csrf
        <input type="text" name="task">
        <select name="category_id">
            <option value="">カテゴリーを選択</option>
            <!--選択肢を一つずつ表示させている-->
            @foreach($category as $category_list)
                <option value="{{ $category_list->id }}">{{ $category_list->category }}</option>
            @endforeach
        </select>
        <input type="submit" name="送信">
    </form>
</body>
</html>
