@extends('layouts.app')

@section('content')
    <?php $user = $irai->user; ?>
        <h1 class='text-center'>{{ $irai->title }}</h1>
                @if (Auth::user()->id == $irai->user_id)
                    <div class="row">
                    <div class="col-xs-6">
                        <div id="hensyuu">
                            {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                                {!! Form::submit('編集', ['class' => 'btn inline-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div id="sakujyo">
                            {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn inline-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    </div>
                    <div class="col-6 col-offset-3">
                       @include('irai_finish.finish_button', ['user' => $user])
                    </div>
                @endif    
    <div class="row">
        <div class="col-12 col-offset-1"> 
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
                <div id="toukou">
                    {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
                        {{Form::hidden('irai_id', $irai->id)}}
                        {{Form::hidden('user_id', $user->id)}}
                        {{Form::hidden('type', 'comment')}}
                        {!! Form::textarea('content', null, ['class' => 'form-control input-lg center-block', 'rows=2',  'placeholder' => '手伝います！〇月〇日いかがですか？' ]) !!}
                        {!! Form::submit('メッセージ送信！', ['class' => 'btn btn-success btn-lg center-blosk']) !!}
                    {!! Form::close() !!}
                </div>
        </div>    
@include('comments.comment', ['comments' => $comments])

@endsection 

