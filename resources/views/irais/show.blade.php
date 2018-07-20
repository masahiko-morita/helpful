@extends('layouts.app')

@section('content')
    
<div class='container'>
    <?php $user = $irai->user; ?>
        <h1 class='text-center'>{{ $irai->title }}</h1>
            <div class="col-md-10"> 
                @if (Auth::user()->id == $irai->user_id)
                    <div id="hensyuu">
                        {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                            {!! Form::submit('編集', ['class' => 'btn center-block']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div id="sakujyo">
                        {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn center-block']) !!}
                        {!! Form::close() !!}
                    </div>
                @endif
            <div class="col-sm-10"> 
                @if (Auth::user()->id == $irai->user_id)
                    <div id="tetsudau">
                       <!--@include('irai_finish.finish_button', ['user' => $user])-->
                       {!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}
                        {{Form::hidden('type', 'message')}}
                        {!! Form::submit('解決した', ['class' => 'btn center-block']) !!}
                        {!! Form::close() !!}
                    </div>
                @endif    


            </div>
    <div class="row">
        <div class="col-xs-12"> 
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
    </div>
        <div class="row row-eq-height">
            <div class="col-md-9">
                <div id="toukou">
                    {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
                        {{Form::hidden('irai_id', $irai->id)}}
                        {{Form::hidden('user_id', $user->id)}}
                        {{Form::hidden('type', 'comment')}}
                        {!! Form::textarea('content', null, ['class' => 'form-control input-lg', 'rows="2"',  'placeholder' => '手伝います！〇月〇日いかがですか？' ]) !!}
                        {!! Form::submit('メッセージ送信！', ['class' => 'btn btn-success btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>    
@include('comments.comment', ['comments' => $comments])

@endsection 