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

</div>
        
<div> 
<<<<<<< HEAD
<div class="col-xs-8">
    <ul class="nav nav-tabs nav-justified">
<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">出した依頼 <span class="badge">{{ $count_irais }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/helpings') ? 'active' : '' }}"><a href="{{ route('users.helpings', ['id' => $user->id]) }}">お助け中 <span class="badge">{{ $count_helpings }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/finishings') ? 'active' : '' }}"><a href="{{ route('users.finishings', ['id' => $user->id]) }}">お助け完了！<span class="badge">{{ $count_finishings }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/finished') ? 'active' : '' }}"><a href="{{ route('users.finished', ['id' => $user->id]) }}">助けられた <span class="badge"></span></a></li>    </ul>
</div>
    <div class='container'>
        <div class='maepage'>
            {!! $irais->render() !!}
        </div> 
    </div>
           @include('irais.irai', ['irais' => $irais])
=======
<div role="document" data-spy="scroll" data-target="#sampleScrollSpy">

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="sampleFix">
						<h1>  </h1>	
						<div data-spy="scroll"id="sampleScrollSpy" class='barbox'>
							<ul class="nav nav-stacked">
								<li><a class="linkInThePage" href="#sampleA"><i class="fa fa-check" '></i>  出した依頼</a></li>
								<li><a class="linkInThePage" href="#sampleB"><i class="fa fa-check"></i>  助けている一覧</a></li>
								<li><a class="linkInThePage" href="#sampleC"><i class="fa fa-check"'></i>  依頼完了一覧</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div id="sampleMainContents">
						
						<h2 id="sampleA">
							 <div class='ribbon3'>
					           <h2>出した依頼</h2>
					        </div>
						</h2>
						<ol>
							@include('irais.irai', ['irais' => $irais])
						</ol>
						<h2 id="sampleB">
					 	<div class='ribbon3'>
				           <h2>助けている一覧</h2>
				        </div>
						</h2>
						<ol>
							@include('irais.irai', ['irais' => $irais])
						</ol>
						<h2 id="sampleC">
							 <div class='ribbon3'>
					           <h2>依頼完了一覧</h2>
					        </div>
						</h2>
						<ol>
							@include('irais.irai', ['irais' => $irais])
						</ol>
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
>>>>>>> cc8e8221b122840ac13062793712bca043536c71
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