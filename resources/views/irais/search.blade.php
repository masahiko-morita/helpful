@extends('layouts.app')

@section('content')
<div class="row">         
  <div class="search-content">
       <span class=' form-inline'>
           <div class="btn-content">
            <div id="kensaku">
            
         
            {!! Form::open(['route' => 'irais.search', 'method' => 'get']) !!}
            {!! Form::text('q', '', ['class' => 'form-control input-lg center-block','autocomplete' => 'off' , 'placeholder' => 'キーワード(例:タイトル(引っ越し),駅(二子玉),時間(12日の場合12))', 'size' => 40,'style' => 'width:600px']) !!}
            {!! Form::submit('依頼を検索', ['class' => 'btn']) !!}
            {!! Form::close() !!}
            </div>
            </div>
        </span>
  </div>

</div>


  
  @if(count($irais) == 0)
    <h1>検索結果 0件</h1>
    <h4>該当する依頼が見つかりません。依頼は毎日増えていますので、次の依頼の解決よろしくお願いします。</h4>
  @else
    @include('irais.irai', ['irais' => $irais])
  @endif 

 
</div>


<a href="{{ route('irais.create')}}">
　<div class="wrap-1">
    <button class="btn-post"><i class="fa fa-hand-peace" id='peace'> </i> <br>New Post</button></div></a>
　</div>
 
  
@endsection
