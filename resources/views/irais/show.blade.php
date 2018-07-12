@extends('layouts.app')

@section('content')
    
<div class='container'>
<?php $user = $irai->user; ?>
<h1 class='text-center'>{{ $irai->title }}</h1>
    <div class="row"> 
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th><i class="fa fa-user" id='peace'> </i></th>
                    <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                </tr>
                <tr>
                    <th><i class="fa fa-file-alt" id='peace'> </i></th>
                    <td>{{ $irai->content }}</td>
                </tr>
                <tr>
                <th><i class="fa fa-clock" id='peace'> </i> </th>
                    <td>{{ $irai->start }}　～　{{ $irai->finish }}</td>
                </tr>
                <tr>
                    <th><i class="fa fa-map-marker-alt" id='peace'> </i> 場所</th>
                    <td>{{ $irai->station }}</td>
                </tr>
                <tr>
                    <th><i class="fa fa-gift" id='peace'> </i> お礼</th>
                    <td>{{ $irai->reward }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            @if (Auth::user()->id != $irai->user_id)
            <div id="tetsudau">
                {!! Form::open(['route' => ['irais.thankyou', $irai->id], 'method' => 'get']) !!}
                {!! Form::submit('手伝う！！！', ['class' => 'btn center-block']) !!}
                {!! Form::close() !!}
            </div>
            @endif
            @if (Auth::user()->id == $irai->user_id)
            <div id="hensyuu">
                {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                    {!! Form::submit('依頼を編集する', ['class' => 'btn center-block']) !!}
                {!! Form::close() !!}
            </div>
            @endif
            @if (Auth::user()->id == $irai->user_id)
            <div id="sakujyo">
                {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
                {!! Form::submit('依頼を削除する', ['class' => 'btn center-block']) !!}
                {!! Form::close() !!}
            </div>
            @endif    
       </div>
        
        <div class="row row-eq-height">
           <div class="col-md-9">
            <div id="toukou">
            {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
            {{Form::hidden('irai_id', $irai->id)}}
            {!! Form::textarea('content', null, ['class' => 'form-control input-lg', 'rows="2"',  'placeholder' => 'コメント' ]) !!}
            {!! Form::submit('コメント投稿！', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
            </div>
            </div>
        </div>    
            
            
    </div>
@include('comments.comment', ['comments' => $comments])

@endsection