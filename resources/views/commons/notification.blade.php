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
     
      DB::table('notifications')->whereIn('id', $delete_list)->get();
?>    
    @if($isChat == true)
    <div class="husen">
      <div class="tyaki"><button type="button" data-dismiss="alert" class="close">&times;</button><p><strong> 新着の取引メッセージがあります</strong></p>
      <a href="#" class="alert-link">link</a>
       
    </div>
    @endif
    
    @if($isComment == true)
    <a href="{{ route('irais.show', $notification->irai_id) }}">
    
     <div class="alert alert-dismissible fade in " role="alert">
      <div class="husen">
        <div class="tyaki"><button type="button" data-dismiss="alert" class="close">&times;</button><p><strong>依頼に新着のコメントがあります</strong></p>
        </div>
    </div>
    </div>
    </a>
    @endif

    @if($isMessage == true)
    <div class="husen">
       コメントした依頼が解決しました！<br>ありがとうございました☺
    </div>
    @endif