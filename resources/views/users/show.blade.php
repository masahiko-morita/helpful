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
    <span class='form-group'>
    　　　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
          {!! Form::submit('投稿', ['class' => 'btn btn-danger btn-lg']) !!}
          {!! Form::close() !!}
        </span>            
    <div class='container'>
        <div class='ribbon3'>
           <h2>出した依頼</h2>
        </div>
        <div class='maepage'>
            {!! $irais->render() !!}
        </div>
    </div>
           @include('irais.irai', ['irais' => $irais])
</div>

    
<div class='usiropage'>
    
{!! $irais->render() !!}
</div>
@endsection