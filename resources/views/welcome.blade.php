@extends('layouts.app')

@section('content')

    @if (Auth::check())
        @include('irais.index')
    @else

    <div class="content">
        <div class="content1">
            <div class=saki>  <h1 style="padding:70px">困ったときは同期に助けを</h1> </div>
            <div class="maintitle">
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="dp_btn">HELPFULを始める</a>
                @endif
            </div>
        </div>
    </div>
    @endif
    
     <div class="introduction">
        <h2>HELPFULでは、自分ではどうしようもないことを、<br>安心して同期に依頼することができます。</h2>
     </div>
  
        <div id="sampleCarousel" class="carousel slide" data-ride="carousel"data-pause="false" data-interval="2500">
         <a href="{{ route('irais.index') }}">   
        	<div class="carousel-inner" role="listbox">
        		<div class="item active">
        			<img src="../images/firstslide.jpg" alt="First slide" height='100'>
        		</div>
        		<div class="item">
        			<img src="../images/secondslide.jpg" alt="Second slide">
        		</div>
        		<div class="item">
        			<img src="../images/thirdslide.jpg" alt="Third slide">
        		</div>
        	</div>
          </a>	
        </div>
        
         <hr class="featurette-divider">
        
        　　<h2 class='text-center'>HELPFULとは？</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 text-center">
            <img  src="images/komaru.png" alt="Generic placeholder image" width="160" height="150">
            <h2>困ったことがあったら</h2>
            <p>「一人暮らしだから野菜やお肉を買っても余る」「充電器わすれた！スマホが死んじゃう！」「知らない同期と飲んでみたいけど機会がない」そんな時ありますよね、、、</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 text-center">
            <img src="images/shiraberu.png" alt="Generic placeholder image" width="170" height="150">
            <h2>HELPFULにPost！</h2>
            <p>HELPFULとはそんなお悩みをお持ちの方が同期に助けを求めることができるプラットフォームです。</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 text-center">
            <img src="images/kanpai.png" alt="Generic placeholder image" width="195" height="150">
            <h2>同期が助けてくれる！</h2>
            <p>自分の「困った」を投稿すると興味を持った同期とその場でコメントのやり取りができ、すぐに助けてもらえます。</p>
            <a class="cp_btn" href="/hatsu" role="button">詳細を見る</a>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

 
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-5 order-md-2">
            <h2 class="featurette-heading">知らない子も多いけどみんな助けてくれるの？<br> <div class="text-muted"><br>Don't Worry!</div></h2>
            <p class="lead">同期104名に対してアンケートを行ったところ右記のような結果に。HELPFULなら同期同士だから安心して頼める上に 話したいと思っていた人に声をかけるorかけられるチャンス！困ったことを解決するとともに同期とのつながりもゲットすることができます。</p>©2018 Google
          </div>
          <div class="col-md-7 order-md-1">
            <img src="images/graph.jpg" alt="Generic placeholder image" width='350' height='450'>
            <img src="images/tomodachi.jpg" alt="Generic placeholder image" width='270' height='450'>
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-12 text-center">
            <h2 class="featurette-heading">さあ登録しよう！<br><br><p class="text-muted">知らない間に他の同期の輪は広がっているかも？</p></h2><br>
            <p class="lead"></p>
          </div>

<div class="wrap-1 ball col-xs-6">
        <a href="{{ route('irais.create') }}">
            <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>新規投稿する</button>
        </a>
    </div>
          
<div class='signup'>
        @if (!Auth::check())
        <a class="button" href="{{ route('signup.get') }}"><span>新規登録</span></a>
        @endif
</div>

<h3>          <br>  </h3>
        <!-- /END THE FEATURETTES -->
        


@endsection