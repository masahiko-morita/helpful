@extends('layouts.app')

@section('content')

<div class='ribbon3'>
  <h2>依頼一覧</h2>
</div>

<div class='container'>
    
@if($count_irais==0)
    <br>
     <h4 class='text-center'>投稿がありません</h4><br>
@else

@include('irais.irai', ['irais' => $irais])
 
 <a href="{{ route('irais.create') }}">
 <div class="wrap-1">

 <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>

</div>
</a>

@endif

</div>
 
  
@endsection

