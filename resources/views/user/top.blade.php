@extends('layouts.user.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
</head>
<body>
    <h1>トップページ</h1>
    <div>
        <div>
            <h2>展示会一覧</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($exhibitions as $exhibition)
                    <div class="card">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card mb-3">
                                <a class="card-title" href='/user/exhibitions/{{ $exhibition->id }}'>{{$exhibition->name}}</a>
                                <p class="card-text">{{$exhibition->explain}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection