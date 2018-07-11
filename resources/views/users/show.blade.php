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

<a id="fab" href="#">
  <i class="fa fa-plus"><p>投稿する</p></i>
</a>

    
<div class='usiropage'>
    
{!! $irais->render() !!}
</div>




@endsection