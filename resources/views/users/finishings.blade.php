@extends('layouts.app')

@section('content')
    <div class='containermypage'>
    <div class='col-md-offset-3 col-md-3 text-center'>
        <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle" width='30%'>
        <h3>{{ $user->name }}</h3>
    </div>


    <div class='col-md-5 text-center'>

       <div class="balloon">
      {{$user->content}}
  <br>
</div>
    </div>
    <div class='col-md-6'><br><br><br></div>
</div>
        
<div> 
<div class="col-xs-12">
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">出した依頼 <span class="badge">{{ $count_irais }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/helpings') ? 'active' : '' }}"><a href="{{ route('users.helpings', ['id' => $user->id]) }}">お助け中 <span class="badge">{{ $count_helpings }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/finishings') ? 'active' : '' }}"><a href="{{ route('users.finishings', ['id' => $user->id]) }}">お助け完了！<span class="badge">{{ $count_finishings }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/finished') ? 'active' : '' }}"><a href="{{ route('users.finished', ['id' => $user->id]) }}">助けられた <span class="badge">{{ $count_finished }}</span></a></li>    </ul>
</div>
    <div class='container'>
        <!--<div class='ribbon3'>-->
        <!--   <h2>出した依頼</h2>-->
        <!--</div>-->
        
    </div>
           	<div id="sampleMainContents">
						<h2 class="text-center">
							 <div class='ribbon3'>
					           <h2>依頼完了一覧</h2>
					        </div>
						</h2>
						
						@if($count_finishings==0)
						<br>
						 <h5 class='text-center'>投稿がありません</h5><br>
						@else
						
						<ol>
							@include('irais.irai', ['irais' => $finishings])
						</ol>
					    @endif
		    </div>

</div>


    

 <a href="{{ route('irais.create', ['id' => $user->id]) }}">
<div class="wrap-1">
  <button class="btn-post"><i class="fa fa-hand-peace" id='peace'> </i><br>New Post</button>
</div>
</a>
@endsection