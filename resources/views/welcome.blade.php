@extends('layouts.app')

@section('cover')
  <div class="cover-inner">
      <div class="title">
          <h1> ENJOY SHOPPING</h1>
      </div>
  </div>
  
  {!! Form::open(['route' => ['irais.index'], 'method' => 'get']) !!}
                {!! Form::submit('ホームに飛ぶ', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
@endsection

