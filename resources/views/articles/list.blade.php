<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($articles as $article)
        <li>{{ $article->title }}</li>
        {{-- {{}} 는 blade의 출력기호이당, 여기서 article은 $row가 됨 --}}
    @endforeach
</body>
</html>