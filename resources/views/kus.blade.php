@extends('layouts.app')

@section('content')
<div class='kus-content'>
    <div class="text-center">
        <span id='hukidashi'>
            <img src='images/hukidashi-1.png'>
        </span>
        <span id="hito">
            <img src='images/hito.png'>
        </span>
        <br>
        <div class='kus-button'>
            <a href="irais" class="btn" role="button"><span><img src='images/runnning.png'>助けます！</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn" role="button"><span>助けて！<img src='images/drown.png'></span></a>
        </div>
    </div>
    <br>
    <br>
    <div class="kus-wakaranai">
        <br>
        <p>↓どちらを選べば良いかわからない人へ↓</p>
        <p>
        困っている人を助けたい！→助けたい！ボタン<br>
        助けてくれる人を探したい！→助けて！ボタン
        </p>
        <br>
    </div>
</div>
@endsection