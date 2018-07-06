@extends('layouts.app')

@section('content')
    <div class="user-profile">
        <div class="icon text-center">
            <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle">
        </div>
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="irais-detail">
        <h2>出した依頼</h2>
            @include('irais.irai', ['irais' => $irais])
        </div>
    </div>    
    {!! $irais->render() !!}
@endsection