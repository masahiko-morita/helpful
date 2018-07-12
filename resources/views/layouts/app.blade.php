<!DOCTYPE html>
<html>
    <head>
        @include('commons.navbar')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Helpful</title>
        
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
        <!--datetimepickerjs-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment-with-locales.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
         
        <!--datetimepickercss-->
　　　　
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
        
        
        <!--css最下部に固定-->
        <script type="text/javascript" src="/js/footerFixed.js"></script>
        
        <!--fontawesome-->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        
    </head>
    
    <body>

          <div class="container">
            @include('commons.error_messages')

            
            @yield('cover')
            @yield('content')
            
            <!-- モーダル・ダイアログ -->
            <div class="modal fade" id="sampleModal" tabindex="-1">
            	<div class="modal-dialog">
            		<div class="modal-content">
            			<div class="modal-header">
            				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            				<h4 class="modal-title">キーワードを検索</h4>
            			</div>
            			<div class="modal-body">
            			 
            				{!! Form::open(['route' => 'irais.search', 'method' => 'get']) !!}
                            {!! Form::text('q', '', ['class' => 'form-control', 'placeholder' => 'キーワード(例:タイトル(引っ越し),駅(二子玉),時間(12日の場合12))', 'size' => 40,'style' => 'width:500px']) !!}
                
            			</div>
            			<div class="modal-footer">
            				{!! Form::submit('依頼を検索', ['class' => 'btn']) !!}
                            {!! Form::close() !!}
            			</div>
            		</div>
            	</div>
            </div>
            
           
        </div> 
        
        
        <!--java-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
    @include('commons.footer')

</html>