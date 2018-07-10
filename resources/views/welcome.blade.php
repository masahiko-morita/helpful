@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('kus')
    @else

    <div class="content">
        <div class="content-inner">
            <div class="maintitle">
                <h1>ワンクリックで簡単に投稿</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-default btn-lg">HELPFULを始める</a>
                @endif
            </div>
        </div>
    </div>
    @endif
    
     <div class="introduction">
        <h2>Helpfulでは、すぐに交換ができて、<br>安心、安全なお取引ができます。</h2>
     </div>
     

        <div class="steps">
            <div class="c">
            <h3 class="text-left">
                              <span class="top-introduction-num">1</span>
                            簡単に投稿できる
            </h3>
            
            <img src="/images/toukou.jpg" width="300px" height="320px">

            <p class="top-introduction-description">
              困ったことや最寄りの駅を入力するだけで、<br>簡単に投稿できます。</p>
            </div>
            
          
           <div class="c">
            <h3 class="text-left">
                <div class="c">
                              <span class="top-introduction-num">2</span>
                            すぐにリクエストを反映できる
            </h3>

            
<<<<<<< HEAD
            <img src="/images/smilydesktop.jpg" width="300px" height="320px">
=======
            <img src="/images/smilydesktop.jpg" width="350px" height="320px">
>>>>>>> bdffeeed45954093413e92af59e2616f39f63c21

            <p class="top-introduction-description">
              投稿したら即返信できる。
            </p>
            </div>
            
            <div class="c">
            <h3 class="text-left">
                      <span class="top-introduction-num">3</span>
                            たくさん投稿がのせられる
            </h3>

            
<<<<<<< HEAD
            <img src="/images/search.png" width="300px" height="320px">
=======
            <img src="/images/search.png" width="350px" height="300px">
>>>>>>> bdffeeed45954093413e92af59e2616f39f63c21

            <p class="top-introduction-description">
              毎日いくつも依頼が投稿されるので、<br>困ったことがきっと解決します。
            </p>
            </div>
        </div>

     <div class=explaination>
          <h2>Helpfulの特徴</h2>
    </div>
    <div class="top-key-features-containers">
                  <section class="top-key-features-item">
                        <figure>
                                  <center><img src=/images/desktop.png alt="" width="80px" height="80px"></center>
                              </figure><h3 class="top-key-features-subtitle text-center">

              お手伝いしたいことや、<br>依頼したいことを投稿しよう
            </h3>
            <p class="top-key-features-description text-center">
              困った時はお手伝いを依頼しよう。暇な時間は人助けしよう
            </p>
          </section>
          
                  <section class="top-key-features-item">
                          <figure>
                                  <center><img src="/images/safe.png" alt="" width="80px" height="80px"alt=""></center>
                              </figure>
                        <h3 class="top-key-features-subtitle text-center">
              安心・安全なシステム
            </h3>
            <p class="top-key-features-description text-center">
              同期同士だから、安心、安全なお取引ができます。
            </p>
          </section>
          
                  <section class="top-key-features-item">
                          <figure>
                                  <center><img src=/images/chat.jpg alt="" width="80px" height="80px"></center>
                              </figure>
                        <h3 class="top-key-features-subtitle text-center">
              メッセージ機能を活用しよう
            </h3>
            <p class="top-key-features-description text-center">
              分からないことは、返信機能でですぐさま解決。
            </p>
          </section>
          
                  <section class="top-key-features-item">
                          <figure>
                                  <center><img src="images/money.png" alt="" width="80px" height="80px"></center>
                              </figure>
                        <h3 class="top-key-features-subtitle text-center">
              誰でも簡単に無料で楽しめる
            </h3>
            <p class="top-key-features-description text-center">
              いつでも誰でも無料で投稿。
            </p>
          </section>
          
<<<<<<< HEAD
    <div class="abc">        
=======
             <div class="abc">        
>>>>>>> bdffeeed45954093413e92af59e2616f39f63c21
      <div class="animation">
        <div class="effect"></div>
         @if (!Auth::check())
          <a href="{{ route('signup.get') }}"> HELPFULを始める </a>
           @endif
         </div>
　  　</div>
　  </div>
@endsection

