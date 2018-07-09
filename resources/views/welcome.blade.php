@extends('layouts.app')
                
@section('content')
    @if (Auth::check())
        @include('kus')
    @else
        <div class="center jumbotron">
            <div class="text-center">
           
                 <h1>かんたん、あんしん、あんぜん</h1>
                <h2>困ったときはHelpfulにお任せ！</h2>
                {!! link_to_route('signup.get', '新規登録!', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login.post', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
          
             </div>
        </div>
    @endif
@endsection