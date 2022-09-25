<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/exhibition.css">
    <title>製品検索結果</title>
</head>
<body>
    <h1>製品検索結果</h1>
    <div class="upper_page">
        <div>
            <h2>製品一覧　ここカードにしたい</h2>
                <table class="table table-bordered">
                <tr>
                    <td>ブース名</td>
                    <td>製品名</td>
                    <td>製品見出し</td>
                    <td>製品説明</td>
                    <td>製品画像</td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->booth->booth_title}}</td>
                        <td>{{$item->item_name}}</td>
                        <td>{{$item->item_head}}</td>
                        <td>{{$item->item_body}}</td>
                        <td src="{{$item->img_url}}"></td>
                    </tr>
                @endforeach
                </table>
        </div> 
    </div>
</body>
</html>