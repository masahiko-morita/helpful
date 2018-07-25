<?php
    if(Auth::check() == false) {
        return;} 
     $notifications = DB::table('notifications')
                    ->where('user_id', \Auth::user()->id)
                    ->orderBy('id')
                    //->where('irai_id')
                    ->get();
     $delete_list = [];
     $isComment = false;
     $isMessage = false;
     $isChat = false;
     $comments_id = 0;
     $messages_id = 0;
    foreach($notifications as $notification) {
         $delete_list[] = $notification->id;
         if($notification->type == 'comment') {
             $isComment = true;
             $comments_id = $notification->id;
         }
         if($notification->type == 'chat'){  
             $isChat = true;
         }
         if($notification->type == 'message'){  
             $isMessage = true;
             $messages_id = $notification->id;
         } 
     }

     DB::table('notifications')->whereIn('id', $delete_list)->get();
?>    
    @if($isChat == true); 
    <div class="husen">
      <div class="tyaki"><button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'close_deals=1';path=/;">&times;</button>
        <div class=moji><h5> 新着の取引メッセージがあります</h5></div>
      <a href="#" class="alert-link">link</a>
      </div>
   </div>
    @endif
    
    @if($isComment == true)
   <div class='husenhani'>
    <a href="{{ route('irais.show', $notification->irai_id) }}">
    <?php
    $commentsIsShow = true;
    $vv =$_COOKIE['close_comments']??"";
    if($vv == $comments_id){
        $commentsIsShow = false;
    } else {
        $commentsIsShow = true;
    }
    ?>
    @if($commentsIsShow)

    <div class="alert alert-dismissible fade in " role="alert">
      <div class="husen">
        <div class="tyaki">
            
         <button type="button" data-dismiss="alert" class="close"  onclick="document.cookie = 'close_comments={{$comments_id}};expires=Thu, 18 Dec 2022 12:00:00 UTC;path=/;';">&times;</button>
           <div class=moji><h5>依頼に新着のコメントがあります</h5></div>
        </div>
       </div>
    </div>
    @endif
    </a>
    </div>
    @endif

    @if($isMessage == true)
    <?php
    $irai = App\Irai::find($notification->irai_id);
    $messagesIsShow = true;
    $vvv =$_COOKIE['close_messages']??"";
    if($vvv == $messages_id){
        $messagesIsShow = false;
    } else {
        $messagesIsShow = true;
    }
    ?>
    @if($messagesIsShow)
    
    <div class="alert alert-dismissible fade in " role="alert">
          
     <div class="husem">
<<<<<<< HEAD
        <div class="heart1"><h3><i class="Heart4 fas fa-heart"></i></div>
        <div class="tyaki"><button type="button" data-dismiss="alert" class="close"  onclick="document.cookie = 'close_messages={{$messages_id}};expires=Thu, 18 Dec 2022 12:00:00 UTC;path=/;';">&times; <div class="items">
    
       </button>
        <p><strong>【{{$irai->title}}】は<br>解決しました！<br>ありがとうございました☺</strong></p></div>
        <div class="heart2"><h3><i class="Heart4 fas fa-heart"></h1></i></div>
     
=======
        <div class="tyaki"><button type="button" data-dismiss="alert" class="close"  onclick="document.cookie = 'close_messages={{$messages_id}};expires=Thu, 18 Dec 2022 12:00:00 UTC;path=/;';">&times;</button><p><strong></div>
       【{{$irai->title}}】は<br>解決しました！<br>ありがとうございました☺</strong></p></div>
>>>>>>> 917ea7469fa82c4a4258b7c14aeba866b685f807
     </div>
    </div>
    </div>
    @endif
    @endif
    
    