@extends('layouts.app')

@section('content')
<div class="row">         
  <div class="index-content">
        <span class='form-group'>
    　　　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
          {!! Form::submit('投稿', ['class' => 'btn btn-danger btn-lg']) !!}
          {!! Form::close() !!}
        </span>
  </div>
</div>
 @include('irais.irai', ['irais' => $irais])
 
  
@endsection

