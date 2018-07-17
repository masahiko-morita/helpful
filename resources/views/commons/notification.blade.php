<?php
    if(Auth::check() == false) {
        return;
    } 
     $notifications = DB::table('notifications')
                    ->where('user_id', \Auth::user()->id)
                    ->get();
     $delete_list = [];
     $isComment = false;
     $isChat = false;
     
     foreach($notifications as $notification) {
         $delete_list[] = $notification->id;
         if($notification->type == 'comment') {
             $isComment = true;
         }
         if($notification->type == 'chat'){
             $isChat = true;
         }
     }                
    DB::table('notifications')->whereIn('id', $delete_list)->delete();
?>    
    @if($isChat == true)
    <div class="panel panel-info">
    <div class="panel-body">
       チャットに新着のコメントがあります。
    </div>
    </div>
    @endif
    @if($isComment == true)
    <div class="panel panel-info">
    <div class="panel-body">
       依頼に新着のコメントがあります。
    </div>
    </div>
    @endif
    
    
