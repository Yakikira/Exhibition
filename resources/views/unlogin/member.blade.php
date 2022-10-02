@extends('layouts.company_user.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>メンバー管理ページ</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>メンバー管理</h1>
    <div class="upper_page">
        <div>
            <a href="/company_user/{{ $company_user->id }}">企業ページに戻る</a>
                <table class="table table-bordered">
                    <tr>                    
                        <td></td>
                        <td>部署名</td>
                        <td>氏名</td>
                        <td>メールアドレス</td>
                    </tr>
                    @foreach($company_user->company->company_users as $member)
                        <tr>
                            <td>
                                <a href=>詳細</a>
                            </td>
                            <td>{{$member->company_dept}}</td>
                            <td>{{$member->cu_name}}</td>
                            <td>{{$member->email}}</td>
                        </tr>
                    @endforeach
                </table>
            <li>企業情報管理</li>
            <li><a href="/invite">メンバー追加</a></li>
        </div>
    </div>
</body>
</html>
@endsection