@extends('layouts.app')
@include('commons.auto')

@section('content')


<div class='text-center'>
    <div class='ribbon3'>
      <h2>依頼一覧</h2>
    </div>
</div>
<div class='container'>
@include('irais.irai', ['irais' => $irais])
    <a href="{{ route('irais.create') }}">
        <div class="wrap-1">
            <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>
        </div>
    </a>
</div>
<div class="text-center">
    <ul class="paginate">
        <p>{{ $irais->links() }}</p>
    </ul>
</div>


@endsection

