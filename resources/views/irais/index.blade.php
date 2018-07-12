@extends('layouts.app')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sampleModal">
<i class="fa fa-search" id='search'></i>
</button>

<!-- モーダル・ダイアログ -->
<div class="modal fade" id="sampleModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">キーワードを検索</h4>
			</div>
			<div class="modal-body">
			 
				{!! Form::open(['route' => 'irais.search', 'method' => 'get']) !!}
    {!! Form::text('q', '', ['class' => 'form-control', 'placeholder' => 'キーワード(例:タイトル(引っ越し),駅(二子玉),時間(12日の場合12))', 'size' => 40,'style' => 'width:500px']) !!}
    
			</div>
			<div class="modal-footer">
				{!! Form::submit('依頼を検索', ['class' => 'btn']) !!}
    {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@include('irais.irai', ['irais' => $irais])
 
 <a href="{{ route('irais.create') }}">
 <div class="wrap-1">

 <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>

</div>
</a>
 
  
@endsection

