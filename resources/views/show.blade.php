<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{$todos->name}}</h1>
    <p>{{$todos->description}}</p>
    <small>
        {{$todos->created_at}}
    </small>
    <a href="/delete/{{$todos->id}}">delete</a>
</body>

</html>