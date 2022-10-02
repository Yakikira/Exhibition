@extends('layouts.company_user.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>ユーザー企業ページ</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>ユーザー企業ページ</h1>
    <div class="upper_page">
        <div>
            <a href="/company_user/items">製品一覧</a>
            <a href="/company_user/items/create">製品作成</a>
            <h3>製品ダウンロード履歴一覧</h3>
                <table class="table table-bordered">
                    <tr>                    
                        <td></td>
                        <td>日付</td>
                        <td>会社名</td>
                        <td>顧客名</td>
                        <td>DL製品</td>
                    </tr>
                    @foreach($histories as $history)
                        <tr>
                            <td>
                                <a href="/company_user/histories/{{$history->id}}">詳細</a>
                            </td>
                            <td>{{$history->created_at}}</td>
                            <td>{{$history->company_name}}</td>
                            <td>{{$history->user_name}}</td>
                            <td>{{$history->item_name}}</td>
                        </tr>
                    @endforeach
                </table>
            <a href="/company_user/{{$company_user->id}}/member">メンバー管理</a>
            <li>企業情報管理</li>
        </div>
    </div>
</body>
</html>
@endsection