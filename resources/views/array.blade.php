<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\css\array.css">
    <link rel="stylesheet" href="\css\home.css">
</head>
<body>
    <div class="container">
        <div class="cards">
            <div class="card">
                @foreach($array as $arr)
                <p>{{$arr["id"]}}</p>
                <p>{{$arr["title"]}}</p>
                <p>{{$arr["price"]}}</p>
                @endforeach 
            </div>
        </div>    
    </div>
</body>
</html>