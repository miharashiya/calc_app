<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <h2>{{ $result }}</h2>

    @error('')
        {{ $message }}
    @enderror    
</body>
</html>
