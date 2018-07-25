@extends('layouts.app')
@extends('commons.auto')

@section('content')

<div class="header_box">
 <div class="demo demo11">
  <div class="headings">
    <svg height="50px" width="100%">
      <text y="45px">HELPFUL GUIDE</text>
    </svg>
  </div>
 </div>
</div>
<div class="demo demo3">
   <div class="heading"><span>取引の流れ</span></div>
</div>

<div class="sakiko">
          <img src="/images/signin3.PNG" width="480px" height="300px"></div>
          
        <div class="iraishitai">
                <div class="person_1">
                    <p>依頼したい人</p>
                </div>
             <div class='naiyou'>   
                <div class="touroku_1">
                    <p> <span class="top-introduction-numm">1</span>「新規投稿する」ボタンをクリック!</p>
                    <img src="/images/new_post_capture.jpg" width="340px" height="170px">
                    
                </div>
                
                <div class="flow_06">
                      <p> <span class="top-introduction-numm">2</span>依頼内容を入力</p>
                     <img src="/images/irao2.jpg" width="270px" height="175px">
                </div>
                
                 <div class="flow_19">
                    <p><span class="top-introduction-numm">3</span>
                        投稿した後、助ける側から<br>通知が来たら、さっそく返信!</p>
                　 <img src="/images/soushin.jpg" width="270px" height="150px">    
                </div>
                
                <div class="flow_19">
                    <p><span class="top-introduction-numm">4</span>
                        助けてもらったら<br>解決したボタンを押そう！</p>
                　 <img src="/images/kaiketsu_capture.jpg" width="270px" height="150px">    
                </div>
            </div>
        </div>
        
        <div class="tasuketai">
            <div class="person_2">
                <p>助けたい人</p>
            </div>

                <div class='naiyou'>
                    
                     <div class="flow_07">
                          <p> <span class="top-introduction-numn">1</span>検索🔎を押して、依頼を探そう</p>
                        <img src="/images/kensaku_capture.jpg" width="350px" height="170px">
                    </div>
                    <div class="flow_04">
                        <p> <span class="top-introduction-numn">2</span>手伝いたいと思う投稿を選択</p>
                         <img src="/images/hikkoshi.PNG" width="250px" height="170px">
                    </div>
                    
                    <div class="flow_10">
                          <p> <span class="top-introduction-numn">3</span>依頼者の投稿にメッセージを送信！</p><br>
                        <img src="/images/soushin.jpg" width="270px" height="150px"><br>
                    </div>
                    
                    <div class="flow_08">
                        <p> <span class="top-introduction-numn">4</span>依頼が完了すると、完了の通知が来ます</p>
                        <img src="/images/thankyou.jpg" width="370px" height="150px">
                    </div>
                </div>
        </div>
    </div>

                            
    @if (Auth::user() == null)                            
    <div class="abc">    
      <div class="animation">
        <div class="effect" style='pointer-events:none;'>
        </div>
        @if (!Auth::check())
        <div class="effect-background">
          <a href="{{ route('signup.get') }}" style='z-index:1000;'> <h1> HELPFULを始める </h1></a>
        </div>
        @endif
      </div>
　  </div>
　  @endif
            
@endsection

