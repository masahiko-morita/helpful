@extends('layouts.app')

@section('content')

<div class='text-center'><h3>自己紹介編集</h3></div>

 <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('content', '自己紹介:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div> 
        {!! Form::submit('更新', ['class' => 'btn btn-info btn-lg center-block']) !!}
    </div>
</div>    
    {!! Form::close() !!}
@endsection 