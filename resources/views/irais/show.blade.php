@extends('layouts.app')

@section('content')

<div class="row">
        <aside class="col-xs-6">
            
             <h1 class='text-center'>{{ $irai->title }}</h1>
             
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
        
             
            <?php $user = $irai->user;
                  $coment =$_COOKIE["coment"]??"";
                  $coment2 =$_COOKIE["coment2"]??"";
                  $coment3 =$_COOKIE["coment3"]??"";
            ?>
        
               
      
            <div class="row">
                <div class="col-xs-12"> 
                    <table class="table">
                        <tr>
                            <th><i class="fa fa-user" id='show'> </i></th>
                            <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-file-alt" id='show'> </i></th>
                            <td>{{ $irai->content }}</td>
                        </tr>
                        <tr>
                        <th><i class="fa fa-clock" id='show'> </i> </th>
                            <td>{{ $irai->start }}　～　{{ $irai->finish }}</td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-map-marker-alt" id='show'> </i> 場所</th>
                            <td>{{ $irai->station }}</td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-gift" id='show'> </i> お礼</th>
                            <td>{{ $irai->reward }}</td>
                        </tr>
                    </table>
                </div>
            </div>
                
                
                       
                            
                        @if (Auth::user()->id == $irai->user_id)
                                @include('irai_finish.finish_button', ['user' => $user])
                                <div class='kaiketsumessage ball'>
                                     @if($coment3 == "")
                                            	<div class="alert alert-warning alert-dismissible fade in" role="alert" id='yaritori'>
                                            	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'coment3=445';">&times;</button>
                                            	<strong>依頼が完了したら"解決した"ボタンを押してください。<br>協力してくれた方にありがとうメッセージが自動的に送られ、一覧から消去されます。</strong>
                                                </div>
                                    @endif
                                </div>
<<<<<<< HEAD
=======
                                <br>
>>>>>>> 917ea7469fa82c4a4258b7c14aeba866b685f807
                        @endif  
        </aside>

        <div class="col-xs-offset-1 col-xs-5">
                <div id="toukou">
                    {!! Form::open(['route' => ['comments.store'], 'method' => 'post']) !!}
                        {{Form::hidden('irai_id', $irai->id)}}
                        {{Form::hidden('user_id', $user->id)}}
                        {{Form::hidden('type', 'comment')}}
                        {!! Form::textarea('content', null, ['class' => 'form-control input-lg center-block', 'rows=2',  'placeholder' => '手伝います！〇月〇日いかがですか？' ]) !!}
                        {!! Form::submit('メッセージ送信！', ['class' => 'btn btn-success btn-lg center-blosk']) !!}
                    {!! Form::close() !!}
                </div>


                <div class='commentboard'>
                    @if($coment2 == "")
                                	<div class="alert alert-warning alert-dismissible fade in" role="alert" id='yaritori'>
                                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'coment2=111';">&times;</button>
                                	<strong>こちらにメッセージが表示されます。<br>依頼が完了するまでこちらでやり取りをして頂けます。</strong>
                                    </div>
                    @endif
                @include('comments.comment', ['comments' => $comments])
                </div>
        </div>
</div>
@endsection 



