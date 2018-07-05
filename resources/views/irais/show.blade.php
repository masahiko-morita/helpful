@extends('layouts.app')

@section('content')
      
<div class="container">
    <div class=text-center>
        <h1>{{ $irai->title }}</h1>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
                {{ $irai->timespan }}
        </div>
        <div class="col-md-4">
                {{ $irai->station }}
        </div>
        <div class="col-md-4">
                対価　
        </div>
    </div>
    <div class='text-center'>
        {{ $irai->content }}
    </div>
    
    <div class="row text-center">
        <div class="col-md-6">
            {{ $irai->reward }}
        </div>
        <div class="col-md-6">
            <a href="/irai_thankyou">購入する</a>
        </div>
    </div>
</div>

<h1>依頼詳細ページ</h1>
    <div class="row"> 
        <div class="col-md-6">
            <table class="table table-hover">
            <tr>
                <th>タイトル</th>
                <td>{{ $irai->title }}</td>
            </tr>
            <tr>
                <th>説明</th>
                <td>{{ $irai->content }}</td>
            </tr>
            <tr>
                <th>期間</th>
                <td>{{ $irai->timespan }}</td>
            </tr>
            <tr>
                <th>駅</th>
                <td>{{ $irai->station }}</td>
            </tr>
            <tr>
                <th>見返り</th>
                <td>{{ $irai->reward }}</td>
            </tr>
            <tr>
                <th>コメント</th>
                <td>{{ $irai->comment }}</td>
            </tr>
        </table>
        </div> 
        ppppp
        
       </div>
@endsection