@extends('layouts.app')

@section('content')
      
<div class="container">
    <div class='text-center'>
        <h1>ありがとうございます！</h1>
        <h4>依頼内容は以下でございます</h4>
    </div>
    {{$irai->title}}
    <div class='text-center'>
        <h2>タイトル</h2>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
                はるな　
        </div>
        <div class="col-md-4">
                場所
        </div>
        <div class="col-md-4">
                対価　
        </div>
    </div>
    <div class='text-center'>
        コンテンツ
    </div>
</div>
@endsection