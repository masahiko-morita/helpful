@extends('layouts.app')

@section('content')

<div class='text-center'>
　　{!! Form::open(['route' => 'irais.index ', 'method' => 'get']) !!}
    {!! Form::submit('依頼ページへ', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::close() !!}
</div>

@endsection