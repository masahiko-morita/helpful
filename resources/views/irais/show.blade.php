@extends('layouts.app')

@section('content')
    
<div class='container text-center'>
<?php $user = $irai->user; ?>
<h1>{{ $irai->title }}</h1>
    <div class="row"> 
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>ユーザー名</th>
                    <td><a href="{{ route('users.show', $user->id) }}"><h4 class="comment-title-comments">{{ $user->name }}</h4></a></td>
                </tr>
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
        
        <div class="row row-eq-height">
           <div class="col-md-9">
            {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
            {{Form::hidden('irai_id', $irai->id)}}
            {!! Form::textarea('content', null, ['class' => 'form-control input-lg' , 'span6' , 'placeholder' => 'コメント' ]) !!}
            {!! Form::submit('コメント投稿！！！', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
            </div>
        </div>    
            
            
    </div>
@include('comments.comment', ['comments' => $comments])

@endsection