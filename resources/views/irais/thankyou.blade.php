@extends('layouts.app')

@section('content')
      
<div class="container">
    <div class='text-center'>
        <h1>ありがとうございます！</h1>
        <h4>依頼内容は以下でございます</h4>
    </div>
    


    <div class="row"> 
        
        <div class="col-md-6 text-center">
            <table class="table table-hover">
            <tr>
                <h3 class='text-center'>{{ $irai->title }}</h3>
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
        
            {!! Form::open(['route' => ['irais.index', $irai->id], 'method' => 'get']) !!}
                {!! Form::submit('ホームに戻る', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
            
        <li><a href="https://tomochat.herokuapp.com">チャットに移動する</a></li>
    </div>
</div>    
    
    
    
    
    
    
    
<!--    {{$irai->title}}-->
<!--    <div class='text-center'>-->
<!--        <h2>タイトル</h2>-->
<!--    </div>-->
<!--    <div class="row text-center">-->
<!--        <div class="col-md-4">-->
<!--                はるな　-->
<!--        </div>-->
<!--        <div class="col-md-4">-->
<!--                場所-->
<!--        </div>-->
<!--        <div class="col-md-4">-->
<!--                対価　-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='text-center'>-->
<!--        コンテンツ-->
<!--    </div>-->
<!--</div>-->
@endsection