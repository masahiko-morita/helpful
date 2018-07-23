@extends('layouts.app')


@section('content')
 <?php 
        $v =$_COOKIE["data1"]??"";

        $vv =$_COOKIE["data2"]??"";
    ?>


        <div class='mypage driveInRight'>
            @if($vv == "")
                	<div class="alert alert-warning alert-dismissible fade in" role="alert">
                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'data2=123';">&times;</button>
                	<strong>↑のユーザー名をクリックするとマイページへのリンクがあります</strong>
                    </div>
            @endif
        </div>
        
         

<div class='text-center'>

        <div class='ribbon3'>
          <h2>依頼一覧</h2>
          
        </div>
    </div>
    <div class='container'>
    @include('irais.irai', ['irais' => $irais])
   

    <div class="wrap-1 ball">
@if($v == "")
                	<div class="alert alert-warning alert-dismissible fade in" role="alert">
                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'data1=123';">&times;</button>
                	<p><strong>新規投稿は<br>こちら↓</strong></p>
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


@endsection