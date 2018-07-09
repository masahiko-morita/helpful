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
        <form class="form-horizontal">
  <!-- form-groupが1行（row）を表す -->
  <div class="form-group">
    <label class="col-xs-2 control-label">aaaa</label>
    <div class="col-xs-10">
      <input type="text" class="form-control" name="content">
    </div>
  </div>
  <!-- 1行 -->
  <div class="form-group">
    <div class="col-xs-offset-2 col-sm-10">
       <a href="{{ route('comments.store', Auth::user()->id) }}"><button input type="hidden" name="irai_id" value="$irai->id" class="btn btn-default">登録</button></a>
    </div>
  </div>
</form>       
      

@endsection