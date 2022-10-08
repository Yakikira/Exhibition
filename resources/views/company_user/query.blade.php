@extends('layouts.company_user.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>製品検索結果</title>
</head>
<body>
    <h1>製品検索結果</h1>
        <h2>製品一覧</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($items as $item)
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img class="img-fluid rounded-start" src="{{$item->img_url}}" alt="製品イメージ画像"/>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title">{{$item->booth->booth_title}}</h5>
                    <h4 class="card-text">{{$item->item_name}}</h4>
                    <h5 class="card-text">{{$item->item_head}}</h5>                        
                    <p class="card-text">{{$item->item_body}}</p>
                    <button class="btn btn-primary" id="download_button{{$item->id}}" onclick="return download2({{$item}})">製品資料ダウンロード</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            </div>
</body>
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
</html>
@endsection