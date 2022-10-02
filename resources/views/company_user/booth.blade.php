@extends('layouts.company_user.app')

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
                        <a class="btn btn-primary" id="/user/download/{{$item->id}}" onclick="return download2({{$item}})" >製品資料ダウンロード</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        function download(e, id){
            'use strict';
            if (confirm("製品資料をダウンロードします")){
                document.getElementById(`download_form${id}`).submit();
        }}
        
        function download2(item){
            console.log(item);
            var save = new XMLHttpRequest();
            var id = item["id"];
            var url = `/user/download/${id}`;
            console.log(url);
            save.open('GET',`/user/download/${id}`, true);
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
@endsection