<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎編</title>
</head>
<body>
    <p>{{ $name }}</p>
    <ul>
        @foreach ($languages as $language)
            <li>{{ $language }}</li>
        @endforeach
    </ul>
    <p>これはindex.blade.phpファイルです。</p>
</body>
</html>
