@extends('layouts.app')

@section('content')

@include('irais.irai', ['irais' => $irais])
 
 <a href="{{ route('irais.create', ['id' => $user->id]) }}">
 <div class="wrap">

 <button class="button"><i class="fa fa-hand-peace" id='peace'> </i> <br>New Post</button>

</div>
</a>
 
  
@endsection

