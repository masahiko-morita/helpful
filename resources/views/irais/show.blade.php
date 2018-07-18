@extends('layouts.app')

@section('content')
    
<div class='container'>
<?php $user = $irai->user; ?>
<h1 class='text-center'>{{ $irai->title }}</h1>

<div class="col-md-10"> 
            @if (Auth::user()->id != $irai->user_id)
                <div id="tetsudau">
                    @include('irai_help.help_button', ['user' => $user])
                </div>
            @endif
            @if (Auth::user()->id == $irai->user_id)
            
            <div id="hensyuu">
                {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                    {!! Form::submit('依頼を編集する', ['class' => 'btn center-block']) !!}
                {!! Form::close() !!}
            </div>
            <div id="sakujyo">
                {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
                {!! Form::submit('依頼を削除する', ['class' => 'btn center-block']) !!}
                {!! Form::close() !!}
            </div>
            @endif    
       </div>
    <div class="row"> 
            <table class="table">
                <tr>
                    <th><i class="fa fa-user" id='show'> </i></th>
                    <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                </tr>
                <tr>
                    <th><i class="fa fa-file-alt" id='show'> </i></th>
                    <td>{{ $irai->content }}</td>
                </tr>
                <tr>
                <th><i class="fa fa-clock" id='show'> </i> </th>
                    <td>{{ $irai->start }}　～　{{ $irai->finish }}</td>
                </tr>
                <tr>
                    <th><i class="fa fa-map-marker-alt" id='show'> </i> 場所</th>
                    <td>{{ $irai->station }}</td>
                </tr>
                <tr>
                    <th><i class="fa fa-gift" id='show'> </i> お礼</th>
                    <td>{{ $irai->reward }}</td>
                </tr>
            </table>
        </div>
        <div class="row row-eq-height">
           <div class="col-md-9">
            <div id="toukou">
            {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
            {{Form::hidden('irai_id', $irai->id)}}
            {{Form::hidden('user_id', $user->id)}}
            {{Form::hidden('type', 'comment')}}
            
            {!! Form::textarea('content', null, ['class' => 'form-control input-lg', 'rows="3"',  'placeholder' => 'コメント' ]) !!}
            {!! Form::submit('コメント投稿', ['class' => 'btn btn-success btn-lg']) !!}

            {!! Form::close() !!}
            </div>
            </div>
        </div>    
    </div>
@include('comments.comment', ['comments' => $comments])

@endsection