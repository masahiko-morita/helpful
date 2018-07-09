<ul class="media-list">
@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    <li class="irai">
        <div class="col-md-4">
            <div>
                <div class="irai-flower">
                    <div class='contentbox'>
                        @if ($irai->id)
                        <div class='title'>
                        <a href="{{ route('irais.show', $irai->id) }}">
                            <p class='widen-height'>
                                <h3 class="irai-title-irais">{{ $irai->title }}</h3></p></a>
                                <h6 class="irai-title-irais">ユーザー名({{ $user->name }})</h6>
                        </div>
                        @endif
                        <div class="irai-contents">
                            <h5 class="irai-title-irais">お礼➡{{ $irai->reward }}</h5>
                            <h5 class="irai-title-irais">場所➡{{ $irai->station }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>

                    