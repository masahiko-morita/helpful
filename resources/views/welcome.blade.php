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
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">HELPFULを始める</a>
                @endif
            </div>

            <div class="content-contents">
            </div>

        </div>
    </div>
    @endif
    
     <div class="introduction">
        <h2>Helpfulでは、すぐに交換ができて、<br>安心、安全なお取引ができます。</h2>
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
              困った時はお手伝いを依頼しよう。暇な時間は人助けしよう。
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
              チャット機能を活用しよう。
            </h3>
            <p class="top-key-features-description text-center">
              分からないことは、チャットですぐさま解決。
            </p>
          </section>
          
                  <section class="top-key-features-item">
                          <figure>
                                  <center><img src="images/money.png" alt="" width="80px" height="80px"></center>
                              </figure>
                        <h3 class="top-key-features-subtitle text-center">
              誰でも簡単に無料で楽しめる。
            </h3>
            <p class="top-key-features-description text-center">
              いつでも誰でも無料で投稿。
            </p>
          </section>
          
　　</div>
@endsection

