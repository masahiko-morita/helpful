<ul class="media-list">
@foreach ($comments as $comment)
    <?php $user = $comment->user; ?>
    <li class="comment">
        <div class="col-md-4">
            <div>
                <div class="comment-flower">
                    <div class='contentbox'>
                        @if ($comment->id)
                        <div class='title'>
                            <p class='widen-height'>
                                <h6 class="comment-title-comments">{{ $user->name }}</h6>
                                <h6 class="comment-title-comments">「{{ $comment->content }}」</h6>
                        </div>
                        @endif
                    </div>
                    @if (Auth::user()->id == $comment->user_id)       
                        {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                        {{Form::hidden('irai_id', $irai->id)}}
                        {!! Form::submit('依頼を削除する', ['class' => 'btn btn-danger btn-lg']) !!}
                        {!! Form::close() !!}
                    @endif 
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>