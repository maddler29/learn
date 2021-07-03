<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集画面</title>
</head>
<body>
    <form method="post" action="{{ route('category.update',$category->id) }}">
        @csrf
        <input type="text" name="category" value="{{ $category->category }}">
        <input type="submit" value="登録">
    </form>
</body>
</html>
