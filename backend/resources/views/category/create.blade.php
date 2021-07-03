<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カテゴリ作成</title>
</head>
<body>
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        <input type="text" name="category">
        <input type="submit" name="送信">
    </form>
</body>
</html>
