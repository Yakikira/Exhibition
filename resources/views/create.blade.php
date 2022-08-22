<!DOCTYPE HTML>
<html>
    <head>
        <meta charser="utf-8">
        <title>製品登録画面</title>
    </head>
    <body>
        <h1>製品登録画面</h1>
        <form action="/company_user/items" method="POST">
            @csrf
            <div class="category">
                <h2>ブース選択</h2>
                <select name="booth[booth_id]">
                    @foreach($booths as $booth)
                        <option value="{{$booth->booth_id}}">{{$booth->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>製品名</h2>
                <input type="text" name="item[name]" placeholder="製品名" value="{{old('item.name')}}"/>
                <p class="title_error" style="color:red">{{$errors->first('item.title')}}</p>
            </div>
            <div class="head">
                <h2>製品の見出し文</h2>
                <textarea name="item[head]" placeholder="製品の見出し文" value="{{old('item.head')}}"></textarea>
                <p class="body_error" style="color:red">{{$errors->first('item.head')}}</p>
            </div>
            <div class="body">
                <h2>製品の紹介文</h2>
                <textarea name="item[body]" placeholder="製品の紹介文" value="{{old('item.body')}}"></textarea>
                <p class="body_error" style="color:red">{{$errors->first('item.body')}}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>