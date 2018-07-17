<ul class="media-list">
@foreach ($chats as $chat)
    <?php $user = $chat->user; ?>
        <li class="chat">
            <div class="chat-flower">
                <div class='contentbox'>
                    @if ($chat->irai_id == $irai->id)
                    <div class='circle'>
                        <a href="{{ route('users.show', $user->id) }}"><h4 class="chat-title-chats"><i class="fa fa-user" id='search'></i><br>{{ $user->name }}</h4</a>
                    </div>
                    <div class="balloon1-left" style="position:relative; max-width:50%;">
                        
                    
                        <div class="popover-content">
                            <p>
                               <td><h4 class="chat-title-chatss">{{ $chat->content }}</h4></td>
                            </p>
                            <div class='text-right'>
                                @if (Auth::user()->id == $chat->user_id)     
                               
                                    {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                                    {{Form::hidden('irai_id', $irai->id)}}
                                    {!! Form::submit('delete', ['class' => 'btn btn-info btn-xs']) !!}
                                    {!! Form::close() !!}
                                
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </li>
@endforeach
</ul>


