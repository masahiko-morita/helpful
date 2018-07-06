<ul class="media-list">
@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    <li class="irai">
        <div class="col-md-4">
            <div>
                <div class="irai-flower">
                    @if ($irai->id)
                    <div class='title'>
                    <a href="{{ route('irais.show', $irai->id) }}">
                        <p class='widen-height'>
                        <h4 class="irai-title-irais">{{ $irai->title }}</h4></p></a>
                    </div>
                    @endif
                    <div class="irai-contents">
                        <p>内容:
                        <h4 class="irai-title-irais">{{ $irai->content }}</h4></p>
                        <p>駅:
                        <h4 class="irai-title-irais">{{ $irai->station }}</h4></p>
                    </div>
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>

                    