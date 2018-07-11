@extends('layouts.app')

@section('content')

@include('irais.irai', ['irais' => $irais])
 
 <a href="{{ route('irais.create') }}">
 <div class="wrap">
 <button class="button"><i class="fa fa-plus"> </i> New Post</button>
</div>
</a>
 
  
@endsection

