@extends('layouts.app')

@section('content')
    
<!--<div class="container">-->
    <!--<div class=text-center>-->
        <!--<h1>{{ $irai->title }}</h1>-->
    <!--</div>-->
    <!--<div class="row text-center">-->
    <!--    <div class="col-md-4">-->
    <!--            {{ $irai->timespan }}-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--            {{ $irai->station }}-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--            対価　-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class='text-center'>-->
    <!--    {{ $irai->content }}-->
    <!--</div>-->
    
    <!--<div class="row text-center">-->
    <!--    <div class="col-md-6">-->
    <!--        {{ $irai->reward }}-->
    <!--    </div>-->
        <!--<div class="col-md-6">-->
        <!--    <a href="/irai_thankyou">購入する</a>-->
        <!--</div>-->
    <!--</div>-->
</div>
<div class='container text-center'>

<h1>{{ $irai->title }}</h1>
    <div class="row"> 
        
        <div class="col-md-6">
            <table class="table">
            
            <tr>
                <th>説明</th>
                <td>{{ $irai->content }}</td>
            </tr>
            <tr>
            <th>時間</th>
                <td>{{ $irai->start }}　～　{{ $irai->finish }}</td>
            </tr>
            <tr>
                <th>駅</th>
                <td>{{ $irai->station }}</td>
            </tr>
            <tr>
                <th>お礼</th>
                <td>{{ $irai->reward }}</td>
            </tr>
            <tr>
                <th>コメント</th>
                <td>{{ $irai->comment }}</td>
            </tr>
        </table>
       
        </div> 
        <div class="col-md-6">


            {!! Form::open(['route' => ['irais.thankyou', $irai->id], 'method' => 'get']) !!}
                {!! Form::submit('手伝う！！！', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
            
            {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                {!! Form::submit('依頼を編集する', ['class' => 'btn btn-info btn-lg']) !!}
            {!! Form::close() !!}
             
            <span>         
            {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
            {!! Form::submit('依頼を削除する', ['class' => 'btn btn-danger btn-lg']) !!}
            {!! Form::close() !!}
            </span>
            
        </div>
       
       </div>
</div>
@endsection