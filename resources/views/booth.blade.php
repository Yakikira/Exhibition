<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{$exhibition->booth->title}}</title>
</head>
<body>
    <h1>{{$exhibition->booth->title}}</h1>
    <div>
        <h2>{{$exhibition->booth->title}}</h2>
        <div>
            @foreach($exhibition->booth->item as $item)
                <div>
                    <h1>{{$item->name}}</h1>
                    <p>{{$item->head}}</p>
                    <p>{{$item->body}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>