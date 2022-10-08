<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/exhibition.css">
    <title>製品管理ページ</title>
</head>
<body>
    <h1>製品管理ページ</h1>
    <div class="upper_page">
        <div>
            <h2>製品一覧</h2>
                <table class="table table-bordered">
                <tr>
                    <td>製品id</td>
                    <td>製品名</td>
                    <td>製品画像</td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item_name}}</td>
                        <td src="{{$item->img_url}}"></td>
                        <td><a href="/company_user/items/{{$item->id}}/edit">編集</a></td>
                        <td>プレビュー</td>
                    </tr>
                @endforeach
                </table>
        </div> 
    </div>
</body>
</html>