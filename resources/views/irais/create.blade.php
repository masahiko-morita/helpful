@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>投稿ページ</h1>
    
    <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($irai, ['route' => 'irais.store','files'=>true]) !!}
            
            
            <div class="form-group">
                    
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control' ,'placeholder' => '例:○○をシェアしましょう']) !!}
                
                    {!! Form::label('content', '説明:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control','placeholder' => '例:○○を買いすぎたので分けたいです']) !!}
                    
<<<<<<< HEAD
                    {!! Form::label('start', '開始時間:', ['class' => 'control-label']) !!}
                    {!! Form::text('start', date('Y-m-d'), ['class' => 'datepicker']) !!}
                    
                    {!! Form::label('finish', '終了時間:', ['class' => 'control-label']) !!}
                    {!! Form::text('finish', date('Y-m-d'), ['class' => 'datepicker']) !!}<br>
                    
                    {!! Form::label('station', '駅:') !!}
                    {!! Form::text('station', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('reward', '見返り:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control']) !!}
=======
                    {!! Form::label('timespan', '期間:') !!}
                    {!! Form::text('timespan', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('start', '始まり:') !!}
                    {!! Form::text('start', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('finish', '終わり:') !!}
                    {!! Form::text('finish', null, ['class' => 'form-control']) !!}
                     
                     {!! Form::label('station', '駅:') !!}
                    {!! Form::text('station', null, ['class' => 'form-control','placeholder' => '例:都内、神奈川なら可です！/会社内でお願いします']) !!}
                    
                       {!! Form::label('reward', '見返り:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control','placeholder' => '例:100円お渡しします/○○が■円で買えます']) !!}
>>>>>>> e1d6a08553b783a641f3bcc875beedce5f3f334f
                    
                    {!! Form::label('comment', 'コメント:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                    
                
            </div> 
　　　　　　　　　　{!! Form::submit('依頼を投稿する', ['class' => 'btn btn-info btn-lg']) !!}
        </div>
    </div>
    {!! Form::close() !!}

@endsection