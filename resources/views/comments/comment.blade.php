<ul class="media-list">
@foreach ($comments as $comment)
    <?php $user = $comment->user; ?>
        <li class="comment">
                <div class="comment-flower">
                    <div class='contentbox'>
                        @if ($comment->irai_id == $irai->id)
                        <div class='title'>
                            <p class='widen-height'>
                                <h5 class="comment-title-comments">{{ $user->name }}</h5>
                                    <div class="popover right show" style="position:relative; max-width:50%;">
                                        <div class="arrow"></div>
                                            <div class="popover-content">
                                                <p>
                                                   <td><h4 class="comment-title-comments">{{ $comment->content }}</h4></td>
                                                </p>
                                            </div>
                                    </div>
                        </div>
                        @endif
                    </div>
                    @if (Auth::user()->id == $comment->user_id)       
                        {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                        {{Form::hidden('irai_id', $irai->id)}}
                        {!! Form::submit('コメント削除', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    @endif 
                </div>
        </li>
@endforeach
</ul>

