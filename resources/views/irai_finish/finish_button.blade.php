    <?php 
          $coment3 =$_COOKIE["coment3"]??"";
    ?>



    @if ($irai->alive == 0)
    <div id="kaiketsu-zumi">
        <p>解決済み</p>
    </div>
    @else
    
    <div id="kaiketsu">
        
        
        {!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}
        {{Form::hidden('type', 'message')}}
        {!! Form::submit('解決した', ['class' => 'btn center-block']) !!}
        {!! Form::close() !!}
        <div class='kaiketsumessage'>
         @if($coment == "")
                	<div class="alert alert-warning alert-dismissible fade in" role="alert" id='yaritori'>
                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'coment3=222';">&times;</button>
                	<strong>依頼が完了した後に「解決した」ボタン↑を押してください。協力してくれた方にありがとうメッセージが自動的に送られます。</strong>
                    </div>
        @endif
        </div>
    </div>
    @endif


