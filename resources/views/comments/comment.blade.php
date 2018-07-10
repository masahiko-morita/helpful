<ul class="media-list">
@foreach ($comments as $comment)
    <?php $user = $comment->user; ?>
    <li class="comment">
        <div class="col-md-4">
            <div>
                <a href="{{ route('comments.show', $comment->id) }}">
                <div class="comment-flower">
                    <div class='contentbox'>
                        @if ($comment->id)
                        <div class='title'>
                            <p class='widen-height'>
                                <h6 class="comment-title-comments">({{ $comment->content }})</h6>
                        </div>
                        @endif
                    </div>
                </div>
                </a>
            </div>
        </div>
    </li>
@endforeach
</ul>