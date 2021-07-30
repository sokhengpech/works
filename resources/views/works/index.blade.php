<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($works as $work)

    <h1>{{ $work->author }}</h1>
    <h1>{{ $work->title }}</h1>
    <h1>{{ $work->text }}</h1>

    @endforeach
</body>
</html>