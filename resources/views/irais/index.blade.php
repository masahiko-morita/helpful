@extends('layouts.app')

@section('content')

<div class='ribbon3'>
  <h2>依頼一覧</h2>
</div>

<div class='container'>
    


@include('irais.irai', ['irais' => $irais])
 
 <a href="{{ route('irais.create') }}">
 <div class="wrap-1">

 <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>

</div>
</a>



</div>
 
  
@endsection

