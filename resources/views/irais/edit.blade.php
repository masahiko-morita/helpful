@extends('layouts.app')

@section('content')

<h1>依頼の投稿編集ページ</h1>

   
 <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($irai, ['route' => ['irais.update', $irai->id], 'method' => 'put']) !!}
            
            <div class="form-group">
                    
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                
                    
                    {!! Form::label('content', '説明:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('timespan', '期間:') !!}
                    {!! Form::text('timespan', null, ['class' => 'form-control']) !!}    
                    
                     {!! Form::label('station', '駅:') !!}
                    {!! Form::text('station', null, ['class' => 'form-control']) !!}
                    
                       {!! Form::label('reward', '見返り:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control']) !!}
                    
                       {!! Form::label('comment', 'コメント:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                    
            </div> 
            {!! Form::submit('更新☺', ['class' => 'btn btn-info btn-lg']) !!}
    </div>
</div>    
    {!! Form::close() !!}

@endsection