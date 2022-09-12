@extends('layouts.company_user.app')

@section('content')
<!DOCTYPE HTML>
<html>
    <head>
        <meta charser="utf-8">
        <title>製品編集画面</title>
    </head>
    <body>
        <h1>製品編集画面</h1>
        <form action="/company_user/items" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="category">
                <h2>ブース選択</h2>
                <div>現在のブース{{$item->booth->booth_title}}</div>
                <select name="item[booth_id]">
                    @foreach($booths as $booth)
                        <option value="{{$booth->id}}" placeholder="ブース名">{{$booth->booth_title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>製品名</h2>
                <input type="text" name="item[item_name]" placeholder="製品名" value="{{$item->item_name}}"/>
                <p class="title_error" style="color:red">{{$errors->first('item.title')}}</p>
            </div>
            <div class="head">
                <h2>製品の見出し文</h2>
                <textarea name="item[item_head]" placeholder="製品の見出し文" value="{{old('item.head')}}"></textarea>
                <p class="body_error" style="color:red">{{$errors->first('item.head')}}</p>
            </div>
            <div class="body">
                <h2>製品の紹介文</h2>
                <textarea name="item[item_body]" placeholder="製品の紹介文" value="{{old('item.body')}}"></textarea>
                <p class="body_error" style="color:red">{{$errors->first('item.body')}}</p>
            </div>
            <div>
                <h2>製品画像ファイルを選択</h2>
                <input type="file" name="image">    
            </div>
            <div>
                <h2>ダウンロード用ファイルを選択</h2>
                <input type="file" name="file">    
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/company_user/{{Auth::user()->id}}">企業ページに戻る</a></div>
    </body>
</html>
@endsection