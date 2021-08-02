!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@csrf
    <h1>Author: {{ $works->author }}</h1></br>
    <h1>Title: {{ $works->title }}</h1></br>
    <h1>Text: {{ $works->text }}</h1>
    <a href="/works"><- Back</a>
</body>
</html>