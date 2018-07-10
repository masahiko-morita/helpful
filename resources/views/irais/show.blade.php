@extends('layouts.app')

@section('content')

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

            @if (Auth::user()->id != $irai->user_id)
            {!! Form::open(['route' => ['irais.thankyou', $irai->id], 'method' => 'get']) !!}
                {!! Form::submit('手伝う！！！', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
            @endif
            @if (Auth::user()->id == $irai->user_id)
            {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                {!! Form::submit('依頼を編集する', ['class' => 'btn btn-info btn-lg']) !!}
            {!! Form::close() !!}
            @endif
            
            @if (Auth::user()->id == $irai->user_id)       
            {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
            {!! Form::submit('依頼を削除する', ['class' => 'btn btn-danger btn-lg']) !!}
            {!! Form::close() !!}
            @endif    
        </div>
        
       
       </div>
       
       {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
       {{Form::hidden('irai_id', $irai->id)}}
        {!! Form::label('content', 'コメント:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        {!! Form::submit('コメント投稿！！！', ['class' => 'btn btn-success btn-lg']) !!}
        {!! Form::close() !!}
        
</div>
@include('comments.comment', ['comments' => $comments])

@endsection