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
                    
                    <div class="container">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <label for="start">開始時刻:</label><br>
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' name="start" value="{{ $irai->start }}" class="form-control" />
                                             <span class="input-group-addon">
                                                 <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                    </div>
                                    <label for="finish">終了時刻:</label><br>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' name="finish" value="{{ $irai->finish }}" class="form-control" />
                                             <span class="input-group-addon">
                                                 <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                               $(function () {
                               $('#datetimepicker').datetimepicker();
                                });
                               $(function () {
                               $('#datetimepicker1').datetimepicker();
                                });
                                
                    </script>
                    
                    {!! Form::label('station', '駅:') !!}
                    {!! Form::text('station', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('reward', 'お礼:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control']) !!}
             
                    {!! Form::label('comment', 'コメント:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
          </div>        
                    
         
          <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-shopping-cart"></span>
            {!! Form::submit('更新！') !!}
          </button>
        </div>
    </div>
</div>    
    {!! Form::close() !!}

@endsection