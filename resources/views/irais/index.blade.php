@extends('layouts.app')

@section('content')



@include('irais.irai', ['irais' => $irais])
 
 <a href="{{ route('irais.create') }}">
 <div class="wrap-1">

 <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>

</div>
</a>
 
  
@endsection

