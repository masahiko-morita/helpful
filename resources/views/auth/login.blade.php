@extends('layouts.app')

@section('content')
    <div class='ribbon2'>
           <h2>ログイン</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ニックネーム') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'autocomplete' => 'off']) !!}
                    
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-info btn-block']) !!}
                {!! Form::close() !!}

            <p>未登録の場合は {!! link_to_route('signup.get', '今すぐ新規登録！') !!}</p>
        </div>
    </div>
@endsection