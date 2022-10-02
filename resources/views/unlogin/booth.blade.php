@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>{{$booth->booth_title}}</title>
</head>
<body>
    <h1>{{$booth->booth_title}}</h1>
    <div>
        <h2>{{$booth->booth_title}}</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($booth->items as $item)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src={{$item->img_url}} width="150" height="150" alt="製品イメージ画像">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h1>{{$item->item_name}}</h1>
                        <p>{{$item->item_head}}</p>
                        <p>{{$item->item_body}}</p>
                        <a class="btn btn-primary" href="/user/exhibitions/booths/{{$booth->id}}" onclick="return download2({{$item}})" >ログインして製品資料ダウンロード</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection