<ul class="media-list">
@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    <li class="irai">
        <div class="col-md-4">
            <div>
                <a href="{{ route('irais.show', $irai->id) }}">
                <div class="irai-flower">
                    <div class="irai-syousai">
                            <p><img src="{{ secure_asset("images/doru.png") }}" alt="housyuu">{{ $irai->reward }}</p>
                            <p><img src="{{ secure_asset("images/chizu.png") }}" alt="housyuu">{{ $irai->station }}</p>
                    </div>
                    <div class='contentbox'>
                        @if ($irai->id)
                        <div class='title'>
                            <p class='widen-height'>
                                <h3 class="irai-title-irais">{{ $irai->title }}</h3></p>
                                <h6 class="irai-title-irais">ユーザー名({{ $user->name }})</h6>
                        </div>
                        @endif
                        <div class="irai-contents">
                            <h5>{{ $irai->start }}　～　{{ $irai->finish }}</h5>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </li>
@endforeach
</ul>

                    