@extends('layouts.app')
@extends('commons.auto')

@section('content')

<div class='containermypage'>
		<div class="introduction_momo">
        <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle" width='30%'>
        <div id=momo_name>
        <h3>{{ $user->name }}</h3>
<<<<<<< HEAD
    </div>
    <div class='col-md-5 text-center'>
=======
        </div>
   
>>>>>>> 67943f1dd9b2d0febe8c973b77fd078a6e15f7ca
		<div class="balloon">
      		{{$user->content}}
		</div>
	</div>
  </div>
<!--<div class="col-xs-12">-->
<!--    <ul class="nav nav-tabs nav-justified">-->
<!--		<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">出した依頼 <span class="badge">{{ $count_irais }}</span></a></li>-->
<!--        <li role="presentation" class="{{ Request::is('users/*/finishings') ? 'active' : '' }}"><a href="{{ route('users.finishings', ['id' => $user->id]) }}">お助け完了！<span class="badge">{{ $count_finishings }}</span></a></li>-->
<!--        <li role="presentation" class="{{ Request::is('users/*/finished') ? 'active' : '' }}"><a href="{{ route('users.finished', ['id' => $user->id]) }}">助けられた <span class="badge"></span></a></li> </ul>-->
<!--</div>--> 
<div class='container'>
    <div class='maepage'>
    	{!! $irais->render() !!}
    </div> 
</div>
<div role="document" data-spy="scroll" data-target="#sampleScrollSpy">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
			</div>

<div class="col-xs-12" id='tatesen'>
	<div id="sampleMainContents">
		<h2 class="text-center">
			<div class='ribbon3'>
				<h2>出した依頼</h2>
			</div>
						@if($count_irais==0)
						<br>
						 <h4 class='text-center'>投稿がありません</h4><br>
						@else
						<ol>
							@include('irais.irai', ['irais' => $irais])
						</ol>
						@endif
						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
	<script>
		$( function() {
			$('.linkInThePage').click( function () {
				var hrefValue = $(this).attr( 'href' );
				$(hrefValue).animatescroll();
			} );
		} );
	</script>

 <a href="{{ route('irais.create', ['id' => $user->id]) }}">
<div class="wrap-1">
  <button class="btn-post"><i class="fa fa-hand-peace" id='peace'> </i><br>New Post</button>
</div>
</a>
@endsection

