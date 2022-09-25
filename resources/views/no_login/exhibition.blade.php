@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>
<body>
    <h1>{{$exhibition->name}}</h1>
    <div>
        <div>
            <div class="booths">
                @foreach($exhibition->booths as $booth)
                    <div class="booth">
                        <a href="/exhibitions/booths/{{$booth->id}}">{{$booth->booth_title}}</a>
                        <p>{{$booth->booth_head}}</p>
                    </div>
                @endforeach
            </div>
        </div>  
    </div>
</body>
</html>
@endsection