@extends((Auth::guard('company_user')->check())?'layouts.company_user.app':
((Auth::guard('user')->check())?'layouts.user.app':'layouts.app'))

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>メンバー追加</title>
</head>
<body>
    <h2>メンバーの追加</h2>
    <div>招待するメンバーのメールアドレス</div>
    <div>送信ボダンを押すと、記載のメールアドレスに招待メールが届きます</div>
    <div>
        <div>
                <form action="/invite" method="post">
                    @csrf
                    <input class="form-control" name="email" value="メールアドレスを記入" type="text">
                    <input class="btn btn-primary" type="submit" value="投稿">
                </form>
        </div>  
    </div>
</body>
</html>
@endsection