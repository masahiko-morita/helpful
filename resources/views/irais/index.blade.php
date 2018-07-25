@extends('layouts.app')


@section('content')
 <?php 
        $v =$_COOKIE["data1"]??"";

        $vv =$_COOKIE["data2"]??"";
    ?>


<h2 class='text-center'>

        <div class='ribbon3'>
          <h2>依頼一覧</h2>
          
        </div>
    </h2>
    <div class='container'>
    @include('irais.irai', ['irais' => $irais])
   

    <div class="wrap-1 ball">

@if($v == "")
                	<div class="alert alert-warning alert-dismissible fade in" role="alert" id='alert'>
                	    <button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'data1=123';">&times;</button>
                	    <p class="text-center"><strong>新規投稿は<br>↓こちらから↓</strong></p>
                    </div>
@endif
        <a href="{{ route('irais.create') }}">
                <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>
        </a>
    
    
    
    <div class="text-center">
        <ul class="paginate">
            <p>{{ $irais->links() }}</p>
        </ul>
    </div>


</div>

@include('commons.auto')

@endsection