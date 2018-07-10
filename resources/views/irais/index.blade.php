@extends('layouts.app')

@section('content')
  <div class="index-content">
      <div class="text-center">
        <span class='form-group'>
          {!! Form::open(['route' => 'irais.search', 'method' => 'get', 'class' => 'form-inline']) !!}
          {!! Form::text('q', '', ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => 40]) !!}
          {!! Form::submit('依頼を検索', ['class' => 'btn btn-success btn-lg']) !!}
          {!! Form::close() !!}
        </span>
        <span class='form-group'>
    　　　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
          {!! Form::submit('投稿', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        </span>
      </div>
  </div>
@include('irais.irai', ['irais' => $irais])

@endsection