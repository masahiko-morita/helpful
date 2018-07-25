
@extends('layouts.app')
@include('commons.auto')

@section('content')

<div class='container　col-xs-10"'>
	<div class="col-xs-12" id="introduction_momo">
	    <div class='row'>
    	    <div class='col-xs-8 col-xs-offset-2 col-lg-offset-3 text center'>
    	        <div class='col-xs-4 col-lg-3'>
                <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle" width='40%'>
                </div>
                <div class='col-xs-6 col-lg-4 text-center'>
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
    	</div>
    	<div class='row'>
    	    <div class='col-xs-8 col-xs-offset-2' id=momo_name>
                <h2>{{ $user->name }}</h2>
            </div>
        </div>  
    </div>
           
    <!--<div class='maepage'>-->
    <!--	{!! $irais->render() !!}-->
    <!--</div>   -->
   

    <div class="col-xs-12" id='tatesen'>
    	<div id="sampleMainContents">
    		<h2 class="text-center">
    			<div class='ribbon3'>
    				<h2>出した依頼</h2></h2>
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
    
     <?php 
            $v =$_COOKIE["data1"]??"";
        ?>
 	
 	
    <div class="wrap-1 ball">

                	<div class="alert alert-warning alert-dismissible fade in" role="alert" id='alert'>
                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'data1=123';">&times;</button>
                	<p class="text-center"><strong>新規投稿は<br>↓こちらから</strong></p>
                    </div>
        <a href="{{ route('irais.create') }}">
        <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>新規投稿する</button>
        </div>
        </a>
    </div>

    <div class="text-center">
        <ul class="paginate">
            <p>{{ $irais->links() }}</p>
        </ul>
    </div>
    
</div>


@endsection
