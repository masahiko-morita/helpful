
    @if ($irai->alive == 0)
    <div id="kaiketsu-zumi">
        <p>解決済み</p>
    </div>
    @else
    
        <?php
                  $coment3 =$_COOKIE["coment3"]??"";
            ?>
         
    <div class='kaiketsumessage'>
                                         @if($coment3 == "")
                                                	<div class="alert alert-warning alert-dismissible fade in  driveInLeft" role="alert" id='yaritori'>
                                                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'coment3=445';">&times;</button>
                                                	<strong>依頼が完了した後に「解決した」ボタン↓を押してください。協力してくれた方にありがとうメッセージが自動的に送られ、こちらの投稿は全体の一覧からは消去されますが、マイページでは確認することができます。</strong>
                                                    </div>
                                        @endif
                           
    
    <div id="kaiketsu">
        
        {!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}
        {{Form::hidden('type', 'message')}}
        {!! Form::submit('解決した', ['class' => 'btn center-block']) !!}
        {!! Form::close() !!}
        
    </div>
    @endif


