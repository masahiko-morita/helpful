@extends('layouts.app')
@include('commons.auto')

@section('content')

<div class='containermypage'>
	<div class="introduction_momo">
            <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle" width='30%'>
        <div id=momo_name>
            <h3>{{ $user->name }}</h3>
        </div>
        <div class='col-md-5 text-center'>
		    <div class="balloon">
			    <div id="hensyuu_contents">
      		        {{$user->content}}
      		    </div>
      		     @if (Auth::user()->id == $user->id)
      		    <div id="hensyuu2">
                        {!! Form::open(['route' => ['users.edit', $user->id], 'method' => 'get']) !!}
                        {!! Form::submit('編集', ['class' => 'btn center-block']) !!}
                        {!! Form::close() !!}
                </div>
                @endif  
	        </div>
	    </div>
    </div>
    <div class='maepage'>
    	{!! $irais->render() !!}
    </div>   
    <div role="document" data-spy="scroll" data-target="#sampleScrollSpy">
	    <div class="container-fluid">
			<div class="row">
			</div>

            <div class="col-xs-12" id='tatesen'>
	            <div id="sampleMainContents">
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

 <?php 
        $v =$_COOKIE["data1"]??"";
    
    ?>
 	
 	
    <div class="wrap-1 ball">
@if($v == "")
                	<div class="alert alert-warning alert-dismissible fade in" role="alert">
                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'data1=123';">&times;</button>
                	<p><strong>新規投稿は↓<br>をクリック</strong></p>
                    </div>
@endif
        <a href="{{ route('irais.create') }}">
                <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>
            </div>
        </a>
    </div>

    <div class="text-center">
        <ul class="paginate">
            <p>{{ $irais->links() }}</p>
        </ul>
    </div>
</div>


</a>
@endsection
