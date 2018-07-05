@extends('layouts.app')



@section('content')



    <form action="cgi-bin/example.cgi" method="post">
          <p>検索したいキーワードを入力してください。</p>
          <input type="search" name="search" placeholder="キーワードを入力">
          <input type="submit" name="submit" value="検索">
    </form>

   <p>@    include('irais.irais',['irais' => $irais])</p>
   
<<<<<<< HEAD
=======

   
   
>>>>>>> 5414be92f3f4c9924fd62121ca5ff116a610c8b3
   <div>
        {!! link_to_route('irais.create', '新規メッセージの投稿') !!}
        
        
  </div>
  
  @include('irais.irai', ['irais' => $irais])
  

\

@endsection