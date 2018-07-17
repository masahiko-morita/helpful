@extends('layouts.app')
@section('content')

<div class="header_box">
 <div class="demo demo11">
  <div class="heading">
    <svg height="50px" width="100%">
      <text y="45px">HELPFUL GUIDE</text>
    </svg>
  </div>
 </div>
</div>

<div class="demo demo3">
  <div class="heading"><span>取引の流れ</span></div>
</div>
        
        <div class="iraishitai">
            <div class="person_1">
                <p>依頼したい人</p>
            </div>
            
            <div class="touroku_1">
                <p> <span class="top-introduction-numm">1</span>New postボタンをクリック!</p>
                <img src="/images/newpost.jpg" width="450px" height="280px">
            </div>
            
            <div class="flow_06">
                  <p> <span class="top-introduction-numm">2</span>依頼したいことを入力</p>
                 <img src="/images/irao2.jpg" width="450px" height="300px">
            </div>
            
            <div class="flow_09">
                <p><span class="top-introduction-numm">3</span>
                    投稿後、トップページに戻り<br>自分の投稿が掲載されていたら完了!</p>
            　 <img src="/images/yo.jpg" width="450px" height="280px">    
            </div>
            
             <div class="flow_19">
                <p><span class="top-introduction-numm">4</span>
                    投稿した後、助ける側から<br>通知が来たら、さっそく返信!</p>
            　 <img src="/images/comment1.jpg" width="450px" height="280px">    
            </div>
        </div>
       
        
        <div class="tasuketai">
            <div class="person_2">
                <p>助けたい人</p>
            </div>
            <div class="flow_04">
                <p> <span class="top-introduction-numn">1</span>まずは会員登録!</p>
                 <img src="/images/signin.png" width="460px" height="280px">
            </div>
            
            <div class="flow_07">
                  <p> <span class="top-introduction-numn">2</span>依頼者の投稿の<br>手伝うボタンをクリック</p>
                <img src="/images/melon2.jpg" width="450px" height="260px">
            </div>
            
            <div class="flow_10">
                  <p> <span class="top-introduction-numn">3</span>依頼を完了するボタンを押すと<br>取引完了！</p>
                <img src="/images/merci.jpg" width="470px" height="280px">
            </div>
            
            <div class="flow_08">
                <p> <span class="top-introduction-numn">4</span>依頼者から問い合わせが<br>きたらコメント欄で返信!</p>
                <img src="/images/tetsudau.jpg" width="450px" height="280px">
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
            
   <!-- <div class="abcd">    -->
   <!--   <div class="animation">-->
   <!--     <div class="effect" style='pointer-events:none;'>-->
   <!--     </div>-->
   <!--     <div class="effect-background">-->
   <!--       <a href="{{ route('signup.get') }}" style='z-index:1000;'> <h1> HELPFULを始める </h1></a>-->
   <!--     </div>-->
   <!--   </div>-->
　  <!--</div>-->
　  <!--</div>-->
@endsection