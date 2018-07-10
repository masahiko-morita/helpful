@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>投稿ページ</h1>
    
    <div class='toukou'>
    <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($irai, ['route' => 'irais.store','files'=>true]) !!}
            
            
            <div class="form-group">
                    
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control' ,'placeholder' => '例:○○をシェアしましょう']) !!}
                
                    {!! Form::label('content', '説明:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control','placeholder' => '例:○○を買いすぎたので分けたいです']) !!}
                    
                    <div class="container">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <label for="start">開始時刻:</label><br>
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' name="start" class="form-control" />
                                             <span class="input-group-addon">
                                                 <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                    </div>
                                    <label for="finish">終了時刻:</label><br>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' name="finish" class="form-control" />
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

                    
                    {!! Form::label('station', '場所:') !!}
                    {!! Form::text('station', null, ['class' => 'form-control','placeholder' => '例:都内、神奈川なら可です！/会社内でお願いします']) !!}
                    
                    {!! Form::label('reward', '見返り:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control','placeholder' => '例:100円お渡しします/○○が■円で買えます']) !!}

<<<<<<< HEAD
                
=======
                    {!! Form::label('comment', 'コメント:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                    
>>>>>>> e6e7256263d7684e0acb13327b0db3bc45f209c5
            </div> 
   
　　　　　　　　　　{!! Form::submit('依頼を投稿する', ['class' => 'btn btn-info btn-lg']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection