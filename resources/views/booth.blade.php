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
        <div>
            @foreach($booth->items as $item)
                <div>
                    <h1>{{$item->item_name}}</h1>
                    <p>{{$item->item_head}}</p>
                    <p>{{$item->item_body}}</p>
                    <img src={{$item->img_url}}>
                    <button id="download_button{{$item->id}}" onclick="return download2({{$item}})">画像ダウンロードjquery</button>
                    <a id="/download/{{$item->id}}" onclick="return download2({{$item}})" >画像ダウンロードaタグ</a>
                    <div>{{$item->id}}</div>
                    <form id="download_form{{$item->id}}" action="/download/{{$item->id}}" method="GET">
                            @csrf
                        <p class="download">[<span onclick="return download(this, {{$item->id}});">画像DLフォーム</span>]</p>
                    </form>
                    <button onclick="doDownload('./test.png', 'test.png');">
                        [test.png]ファイルをダウンロード
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function download(e, id){
            'use strict';
            if (confirm("本当にDLしますか？")){
                document.getElementById(`download_form${id}`).submit();
        }}
        
        function download2(item){
            console.log(item);
            var save = new XMLHttpRequest();
            var id = item["id"];
            var url = `/download/${id}`;
            console.log(url);
            save.open('GET',`/download/${id}`, true);
            save.send();
            //var dl = new XMLHttpRequest();
            //dl.responseType = "blob";
            var dlurl = item["file_url"];
            var filename = item["name"];
            console.log(dlurl);
            //dl.open('GET',dlurl,true);
            const fileName = 'file';
            let link = document.getElementById(`/download/${id}`);
            link.href= dlurl;
            link.download = `${filename}.dox`;
            //dl.send();
            link.click();
        }


    </script>
</body>
</html>