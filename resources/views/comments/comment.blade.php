<ul class="media-list">
@foreach ($comments as $comment)
    <?php $user = $comment->user; ?>
<<<<<<< HEAD
        <li class="comment">
            <div class="comment-flower">
                <div class='contentbox'>
                    @if ($comment->irai_id == $irai->id)
                    <div class='name'>
                        <a href="{{ route('users.show', $user->id) }}"><h3 class="comment-title-comments">{{ $user->name }}</h3></a>
                    </div>
                    <div class="popover right show" style="position:relative; max-width:50%;">
                        <div class="arrow"></div>
                    
                        <div class="popover-content">
                            <p>
                               <td><h4 class="comment-title-comments">{{ $comment->content }}</h4></td>
                            </p>
                            <div class='comment-death'>
                                @if (Auth::user()->id == $comment->user_id)       
                                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                                    {{Form::hidden('irai_id', $irai->id)}}
                                    {!! Form::submit('コメント削除', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </div>
                        
=======
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
                            
>>>>>>> 7dd9c4f94f354ef2f5c29b72ab4f77347d660c50
                    </div>
                    @endif
                </div>
<<<<<<< HEAD
            </div>
        </li>
=======
>>>>>>> 7dd9c4f94f354ef2f5c29b72ab4f77347d660c50
@endforeach
</ul>

