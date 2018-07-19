<?php
    if(Auth::check() == false) {
        return;
    } 
     $notifications = DB::table('notifications')
                    ->where('user_id', \Auth::user()->id)
                    //->where('irai_id')
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
       新着の取引メッセージがあります。
    </div>
    </div>
    @endif
    
    @if($isComment == true)
    <a href="{{ route('irais.show', $notification->irai_id) }}">
    <div class="panel panel-info">
    <div class="panel-body">
       依頼に新着のコメントがあります。
    </div>
    </div>
    </a>
    @endif
    
<?php
    if(Auth::check() == false){
        return;
    }
    
    $thankyou_notifications = DB::table('thankyou_notifications')
                            ->where('user_id', \Auth::user()->id)
                            ->get();
    $delete_list = [];
    $is_Comment = false;
    
    foreach($thankyou_notifications as $thankyou_notification) {
        $delete_list[] = $thankyou_notification->id;
        if($thankyou_notification->message == 'comment') {
            $is_Comment = true;
        }
    }
    
    
    DB::table('thankyou_notifications')->whereIn('id', $delete_list)->delete();
    
?>

    @if($is_Comment == true)
    <div class="panel panel-info">
    <div class="panel-body">
       コメントした依頼が解決しました！ありがとうございました！
    </div>
    </div>
    @endif