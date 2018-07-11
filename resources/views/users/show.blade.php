@extends('layouts.app')

@section('content')

<div class='containermypage'>
    <div id="Awesome" class="anim750">
        <div class="reveal circle_wrapper">
            <div class="circle">{{ $user->content }}</div>
        </div>
                        
        <div class="sticky anim750">
            <div class="front circle_wrapper anim750">
                <div class="circle anim750"></div>
            </div>
        </div>
        
        <h4>
          <p>{{$user->name}}</p></h4>
                        
  <div class="sticky anim750">
        <div class="back circle_wrapper anim750">
            <div class="circle anim750"></div>
        </div>
    </div>
                        

　　　　
       
    </div>

    
</div>

        
<div>
    <span class=''>
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