@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
 
        <div class='shinki_ribbon'>
           <h2>新規投稿</h2>
        </div>
    <div class='toukou'>
    <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($irai, ['route' => 'irais.store','files'=>true ]) !!}

            <h4>※は必須です</h4>            
            <br>
                <div class="form-group">
                    {!! Form::label('title', '※ タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control' ,'placeholder' => '例:○○をシェアしましょう', 'autocomplete' => 'off' ]) !!}
                
                    {!! Form::label('content', '※ 理由:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows=2','placeholder' => '例:○○を買いすぎたので分けたいです' ,'autocomplete' => 'off' ])!!}
                    
                    <div class="container">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <label for="start">開始時刻(任意):</label><br>
                                        <div class='input-group date' id='datetimepicker'>
                                            <input type='text' name="start" value="{{ old('start') }}" class="form-control" /  autocomplete="off">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    <label for="finish">終了時刻(任意):</label><br>
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' name="finish" value="{{ old('finish') }}" class="form-control" / autocomplete="off">
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
                    
                    {!! Form::label('station', '※ 取引場所:') !!}
                    {!! Form::text('station', null,  ['class' => 'form-control','placeholder' => '例: 都内、神奈川なら可です！/会社内でお願いします🏢' ,'autocomplete' => 'off']) !!}
                    
                    {!! Form::label('reward', '※ お礼:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control','placeholder' => '例: ビスコあげます / ランチ奢ります🍔' ,'autocomplete' => 'off']) !!}
                     
            </div> 
                    {!! Form::submit('依頼を投稿する', ['class' => 'btn btn-info btn-lg']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection