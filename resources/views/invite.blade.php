@extends((Auth::guard('company_user')->check())?'layouts.company_user.app':
((Auth::guard('user')->check())?'layouts.user.app':'layouts.app'))

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
</head>
<body>
    <h1>メール作成</h1>
    <div>
        <div>
                <form action="/mail" method="post">
                    @csrf
                    <input class="form-control" name="email" type="text">
                    <input class="btn btn-primary" type="submit" value="投稿">
                </form>
        </div>  
    </div>
</body>
</html>
@endsection