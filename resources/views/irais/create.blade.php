@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>出品ページ</h1>
    
        <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($irai, ['route' => 'irais.store','files'=>true]) !!}
            
            
            <div class="form-group">
                    
                    {!! Form::label('name', '商品名:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                
                    
                    {!! Form::label('content', '商品説明:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('price', '値段:') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}    
                    
                     {!! Form::label('name', 'コメント:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    
                       {!! Form::label('name', '駅:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    
                       {!! Form::label('name', '報酬:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    
                
            </div> 
    
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-sunglasses"></span>
            {!! Form::submit('投稿！') !!}
        </button>
        </div>
    {!! Form::close() !!}

@endsection