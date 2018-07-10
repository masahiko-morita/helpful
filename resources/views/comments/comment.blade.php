<ul class="media-list">
@foreach ($comments as $comment)
    <?php $user = $comment->user; ?>
                <div class="comment-flower">
                    <div class='contentbox'>
                        @if ($comment->irai_id == $irai->id)
                        <div class='comment-title'>
                            <h3 class="comment-title-comments"><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</h3></a>
                                    <div class="popover right show" style="position:relative; max-width:50%;">
                                        <div class="arrow"></div>
                                            <div class="popover-content">
                                                <p>
                                                   <td><h5 class="comment-title-comments">{{ $comment->content }}</h4></td>
                                                </p>
                                            </div>
                                    </div>
                        </div>
                            @if (Auth::user()->id == $comment->user_id)       
                                {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                                {{Form::hidden('irai_id', $irai->id)}}
                                {!! Form::submit('コメント削除', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            @endif 
                        @endif
                            
                    </div>
                </div>
@endforeach
</ul>

