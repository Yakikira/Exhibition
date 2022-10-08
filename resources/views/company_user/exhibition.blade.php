@extends('layouts.company_user.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>
<body>
    <h1>{{$exhibition->name}}</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($exhibition->booths as $booth)
            <div class="card">
                <div class="card-body">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card mb-3">
                        <a href="/company_user/exhibitions/booths/{{$booth->id}}">{{$booth->booth_title}}</a>
                        <p>{{$booth->booth_head}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
@endsection