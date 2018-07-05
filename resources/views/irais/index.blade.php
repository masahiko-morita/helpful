@extends('layouts.app')

@section('content')

    <form action="cgi-bin/example.cgi" method="post">
          <p>検索したいキーワードを入力してください。</p>
          <input type="search" name="search" placeholder="キーワードを入力">
          <input type="submit" name="submit" value="検索">
    </form>

   <div>
  　　　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
        {!! Form::submit('依頼を投稿する', ['class' => 'btn btn-primary btn-lg']) !!}
        {!! Form::close() !!}
　　</div>
  
  @include('irais.irai', ['irais' => $irais])

@endsection