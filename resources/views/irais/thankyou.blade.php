@extends('layouts.app')

@section('content')
<?php $user = $irai->user; ?>
<div class="container">
    <div class='text-center'>

           <h2>ありがとうございます</h2>

        <h4>依頼内容は以下でございます</h4>
    </div>

    <div class="row"> 
    
        <div class='container'>
        <div id="kanryou">
         @include('irai_finish.finish_button', ['user' => $user])
        </div>
        <!--{!! Form::open(['route' => ['irais.index', $irai->id], 'method' => 'get']) !!}-->
        <!--{!! Form::submit('依頼完了', ['class' => 'btn btn-primary btn-lg']) !!}-->
        <!--{!! Form::close() !!}-->
        
        </div>
        </div>
        
        
        <div class="col-md-6 text-center">
            <table class="table">
            <tr>
                <div id= momo><h3>{{ $irai->title }}</h3></div>
            </tr>
            
            <tr>
                <th>説明</th>
                <td>{{ $irai->content }}</td>
            </tr>
            
            <tr>
                <th>期間</th>
                <td>{{ $irai->start }}　～　{{ $irai->finish }}</td>
            </tr>
            <tr>
                <th>駅</th>
                <td>{{ $irai->station }}</td>
            </tr>
            <tr>
                <th>見返り</th>
                <td>{{ $irai->reward }}</td>
            </tr>
            </table>
       
        </div> 
        
        <div class="row row-eq-height">
            <div class="col-md-9">
            <h3>取引メッセージ</h3>
            <div class="btn-content">
            <div id="toukou">
                {!! Form::open(['route' => ['chats.store'], 'method' => 'post']) !!}
                {{Form::hidden('irai_id', $irai->id)}}

                {!! Form::textarea('content', null, ['class' => 'form-control input-lg' , 'rows="2"',  'placeholder' => 'コメント'  ]) !!}

                {{Form::hidden('user_id', $user->id)}}
                {{Form::hidden('type', 'chat')}}

                {{Form::hidden('user_id', $user->id)}}
                {{Form::hidden('type', 'chat')}}
               

                {!! Form::submit('投稿！', ['class' => 'btn center-block']) !!}
                {!! Form::close() !!}
            </div>
            </div>
           </div>
        </div>  
        <!--{!! Form::submit('評価をする', ['class' => 'btn btn-danger btn-lg']) !!}-->
        <!--{!! Form::close() !!}-->
         <div id="home">
        {!! Form::open(['route' => ['irais.index', $irai->id], 'method' => 'get']) !!}
        {!! Form::submit('ホームに戻る', ['class' => 'btn center-block']) !!}
        {!! Form::close() !!}
        </div>
    </div>

</div>    

 @include('chats.chat', ['chats' => $chats])
@endsection

