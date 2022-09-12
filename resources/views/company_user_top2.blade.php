@extends('layouts.company_user.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
</head>
<body>
    <h1>展示会一覧ページ</h1>
    <div>
        <div>
            <h2>展示会New</h2>
            <div class="exhibitions">
                @foreach($exhibitions as $exhibition)
                    <div class="exhibition">
                        <a href='/exhibitions/{{ $exhibition->id }}'>{{$exhibition->name}}</a>
                        <p>{{$exhibition->explain}}</p>
                    </div>
                @endforeach
            </div>
        </div>  
    </div>
</body>
</html>
@endsection