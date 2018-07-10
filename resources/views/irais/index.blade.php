@extends('layouts.app')

@section('content')
<<<<<<< HEAD

  <div class="row">
=======
  <div class="index-content">
>>>>>>> 8370b11b92cd9f33c09f7f97c60fc34f3096eefb
      <div class="text-center">
        <span class='form-group'>
          {!! Form::open(['route' => 'irais.search', 'method' => 'get', 'class' => 'form-inline']) !!}
          {!! Form::text('q', '', ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => 40]) !!}
          {!! Form::submit('依頼を検索', ['class' => 'btn btn-success btn-lg']) !!}
          {!! Form::close() !!}
        </span>
        <span class='form-group'>
    　　　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
<<<<<<< HEAD
          {!! Form::submit('やばたにえん', ['class' => 'btn']) !!}
=======
          {!! Form::submit('投稿', ['class' => 'btn btn-danger']) !!}
>>>>>>> 8370b11b92cd9f33c09f7f97c60fc34f3096eefb
          {!! Form::close() !!}
        </span>
      </div>
  </div>
@include('irais.irai', ['irais' => $irais])
<<<<<<< HEAD
<div class="search">
    <div class="row">
            <div class="text-center">
                {!! Form::open(['route' => 'irais.search', 'method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('q', '', ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => 40]) !!}
                    </div>
                    {!! Form::submit('依頼を検索', ['class' => 'btn btn-success btn-lg']) !!}
                {!! Form::close() !!}
            </div>
    </div>
</div>
<div>
  　　　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
        {!! Form::submit('依頼を投稿する', ['class' => 'btn btn-primary btn-lg']) !!}
        {!! Form::close() !!}
　　</div>
  
  @include('irais.irai', ['irais' => $irais])
</div>


=======
>>>>>>> 8370b11b92cd9f33c09f7f97c60fc34f3096eefb

@endsection