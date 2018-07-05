<ul class="media-list">
@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    <li class="irai">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default-irais">
                <div class="panel-body-irais">
                    @if ($irai->id)
                    <div class='title'>
                    <a href="{{ route('irais.show', $irai->id) }}">
                        <p>タイトル:
                            <h4 class="irai-title-irais">{{ $irai->title }}</h4></p></a>
                    </div>
                    @endif
                    <p>内容:
                    <h4 class="irai-title-irais">{{ $irai->content }}</h4></p>
                    <p>駅:
                    <h4 class="irai-title-irais">{{ $irai->station }}</h4></p>
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>

                    