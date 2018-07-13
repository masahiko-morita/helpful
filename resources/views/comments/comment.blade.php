<ul class="media-list">
@foreach ($comments as $comment)
    <?php $user = $comment->user; ?>
        <li class="comment">
            <div class="comment-flower">
                <div class='contentbox'>
                    @if ($comment->irai_id == $irai->id)
                    <div class='circle'>
                        <a href="{{ route('users.show', $user->id) }}"><h3 class="comment-title-comments"><i class="fa fa-user" id='search'></i><br>{{ $user->name }}</h3></a>
                    </div>
                    <div class="balloon1-left" style="position:relative; max-width:50%;">
                        
                    
                        <div class="popover-content">
                            <p>
                               <td><h4 class="comment-title-commentss">{{ $comment->content }}</h4></td>
                            </p>
                            <div class='text-right'>
                                @if (Auth::user()->id == $comment->user_id)     
                               
                                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
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

