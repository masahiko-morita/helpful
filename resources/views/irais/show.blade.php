@extends('layouts.app')

@section('content')

<div class="row">
        <aside class="col-xs-6">
           
            <?php $user = $irai->user;
                  $coment =$_COOKIE["coment"]??"";
                  $coment2 =$_COOKIE["coment2"]??"";
                  $coment3 =$_COOKIE["coment3"]??"";
            ?>
         
         
         <div class="well text-center">

           <h3 class='text-center'>{{ $irai->title }}</h3><br>
            
            
            <h5>{{ $irai->content }}</h5>
            <table class='table'>
            <tr>
    			<th><i class="glyphicon glyphicon-time"></i></th>
    			<td>{{ $irai->start }}　～　{{ $irai->finish }}</td>
    		</tr>
    		<tr>
    			<th><i class="glyphicon glyphicon-map-marker"></i></th>
    			<td>{{ $irai->station }}</td>
    		</tr>
    		<tr>
    			<th><i class="glyphicon glyphicon-gift"> </i></th>
    			<td>{{ $irai->reward }}</td>
    		</tr>
			<tr>
    			<th><i class="glyphicon glyphicon-user"> </i></th>
    			<td><a href="{{ route('users.show', $user->id) }}"><span class='under'>{{ $user->name }}</span></a></td>
    		</tr>
            </table>
              @if (Auth::user()->id == $irai->user_id)
                            <div class="row">
                            <div class="col-xs-6">
                                <div id="hensyuu">
                                     @if($irai->alive == 1)
                                    {!! Form::open(['route' => ['irais.edit', $irai->id], 'method' => 'get']) !!}
                                        {!! Form::submit('編集', ['class' => 'btn inline-block']) !!}
                                    {!! Form::close() !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div id="sakujyo">
                                    {!! Form::open(['route' => ['irais.destroy', $irai->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('削除', ['class' => 'btn inline-block']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            
                            </div>
                @endif
            
        </div>
        
         <div id='kakomu'>
                <div id="toukou" style="text-align:center;">
                 
                        {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
                            {{Form::hidden('irai_id', $irai->id)}}
                            {{Form::hidden('user_id', $user->id)}}
                            {{Form::hidden('type', 'comment')}}
                            {!! Form::textarea('content', null, ['class' => 'form-control input', 'rows=2',  'placeholder' => '手伝います！〇月〇日いかがですか？' ]) !!}
                            
                            {!! Form::submit('メッセージ送信', ['class' => 'btn']) !!}
                        {!! Form::close() !!}
           

                </div>
            </div>

  
                         @if (Auth::user()->id == $irai->user_id)
                                 <div class='kaiketsumessage driveInLeft'>
                                  @include('irai_finish.finish_button', ['user' => $user])<br><br><br>
                                 </div>

                        @endif  
            
        </aside>


        <div class="col-xs-6">

                <div class='commentboard'>
                    
                    <div style="height:500px;overflow:auto;padding:5px;">
                    @if($coment2 == "")
                                	<div class="alert alert-warning alert-dismissible fade in driveInTop" role="alert" id='yaritori2'>
                                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'coment2=111';">&times;</button>
                                	<strong>こちらにメッセージが表示されます。<br>依頼が完了するまでこちらでやり取りをして頂けます。</strong>
                                    </div>
                    @endif
                @include('comments.comment', ['comments' => $comments])
                    </div>
                    
                
            </div>

</div>
@endsection 



