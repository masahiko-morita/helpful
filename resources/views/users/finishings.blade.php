@extends('layouts.app')

@section('content')
    <div class='containermypage'>
    <div class='col-md-offset-3 col-md-3 text-center'>
        <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle" width='30%'>
        <h3>{{ $user->name }}</h3>
    </div>


    <div class='col-md-5 text-center'>

       <div class="balloon">
      {{$user->content}}
  <br>
</div>
    </div>
    <div class='col-md-6'><br><br><br></div>
</div>
        
<div> 
<div class="col-xs-8">
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">出した依頼 <span class="badge">{{ $count_irais }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/helpings') ? 'active' : '' }}"><a href="{{ route('users.helpings', ['id' => $user->id]) }}">助けている一覧 <span class="badge">{{ $count_helpings }}</span></a></li>
        <li role="presentation" class="{{ Request::is('users/*/finishings') ? 'active' : '' }}"><a href="{{ route('users.finishings', ['id' => $user->id]) }}">依頼完了一覧 <span class="badge">{{ $count_finishings }}</span></a></li>
    </ul>
</div>
    <div class='container'>
        <div class='ribbon3'>
           <h2>出した依頼</h2>
        </div>
        
    </div>
           @include('irais.irai', ['irais' => $finishings])
</div>


    

 <a href="{{ route('irais.create', ['id' => $user->id]) }}">
<div class="wrap-1">
  <button class="btn-post"><i class="fa fa-hand-peace" id='peace'> </i><br>New Post</button>
</div>
</a>
@endsection