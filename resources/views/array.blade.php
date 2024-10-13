<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\css\array.css">
</head>
<body>
    <div class="cards">
        @foreach($array as $arr)
        <p>{{$arr->id}}</p>
        <p>{{$arr->title}}</p>
        <p>{{$arr->price}}</p>
        @endforeach
    </div>
</body>
</html>