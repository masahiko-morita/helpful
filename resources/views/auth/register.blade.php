@extends('layouts.app')

@section('content')
    <div class='ribbon2'>
           <h2>新規登録</h2>
    </div>
    <div class="text-center"><h3>※は必須です</h3></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '※ニックネーム') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <input type='hidden' name="email" value="dummy@example.com">
                
                <div class="form-group">
                        {!! Form::label('gender', '性別') !!}
                        {{Form::select('gender', [
                        'Male' => '男性',
                        'Female' => '女性']
                        )}}
                    </div>

                <div class="form-group">
                    {!! Form::label('password', '※パスワード(6文字以上)') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', '※パスワード（確認）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', '※ホームチーム情報/ひとこと') !!}
                    {!! Form::text('content', old('content'),['class' => 'form-control','placeholder' => '13-C/よろしくお願いします！']) !!}
                </div>
                
                
                {!! Form::submit('新規登録！', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection