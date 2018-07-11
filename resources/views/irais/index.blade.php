@extends('layouts.app')

@section('content')

@include('irais.irai', ['irais' => $irais])
 
<div class="wrap">
  <button class="button"><i class="fa fa-plus">  </i> New Post<a href="{{ route('irais.create', ['id' => $user->id]) }}"></a></button>
</div>
 
  
@endsection

