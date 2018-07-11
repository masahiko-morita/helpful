<ul class="media-list">
@foreach ($chats as $chat)
    <?php $user = $chat->user; ?>
        <li class="chat">
            <div class="chat-flower">
                <div class='contentbox'>
                    @if ($chat->irai_id == $irai->id)
                    <div class='name'>
                        <a href="{{ route('users.show', $user->id) }}"><h3 class="chat-title-chats">{{ $user->name }}</h3></a>
                    </div>
                    <div class="popover right show" style="position:relative; max-width:50%;">
                        <div class="arrow"></div>
                    
                        <div class="popover-content">
                            <p>
                               <td><h4 class="chat-title-chats">{{ $chat->content }}</h4></td>
                            </p>
                            <div class='chat-death'>
                                @if (Auth::user()->id == $chat->user_id)       
                                    {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                                    {{Form::hidden('irai_id', $irai->id)}}
                                    {!! Form::submit('コメント削除', ['class' => 'btn btn-danger btn-xs']) !!}
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

