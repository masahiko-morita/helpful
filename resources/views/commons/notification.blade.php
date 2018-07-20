<?php
    if(Auth::check() == false) {
        return;} 
     $notifications = DB::table('notifications')
                    ->where('user_id', \Auth::user()->id)
                    //->where('irai_id')
                    ->get();
     $delete_list = [];
     $isComment = false;
     $isMessage = false;
     $isChat = false;
      
    foreach($notifications as $notification) {
         $delete_list[] = $notification->id;
         if($notification->type == 'comment') {
             $isComment = true;
         }
         if($notification->type == 'chat'){  
             $isChat = true;
         }
         if($notification->type == 'message'){  
             $isMessage = true;} 
     }
     
      DB::table('notifications')->whereIn('id', $delete_list)->delete();
?>    
    @if($isChat == true)
    <div class="husen">
       新着の取引メッセージがあります<a href="#" class="alert-link">link</a>
    </div>
    @endif
    @if($isComment == true)
    <a href="{{ route('irais.show', $notification->irai_id) }}">
    <div class="husen">
      依頼に新着のコメントがあります
    </div>
    </a>
    @endif

    @if($isMessage == true)
    <div class="husem">
       コメントした依頼が解決しました！<br>ありがとうございました☺
    </div>
    @endif