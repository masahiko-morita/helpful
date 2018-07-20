@extends('layouts.app')

@section('content')

<h1>この依頼はすでに解決しています<(_ _)></h1>
<li>{!! link_to_route('irais.index', 'ホームに戻る') !!}</li>
@endsection