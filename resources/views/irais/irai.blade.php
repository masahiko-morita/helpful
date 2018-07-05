<ul class="media-list">
@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    <li class="irai">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <!--<div class="panel panel-default-irais"><a href="{{ route('irais.show', $irai->id) }}">-->
                <div class="panel-body-irais">
                    @if ($irai->id)
                    <h4 class="irai-title-irais">{{ $irai->title }}</h4>
                    @endif
                </div>    
                <div class="panel-body-irais">    
                    <h4 class="irai-title-irais">{{ $irai->content }}</h4>
                </div>
        <!--</a></div>-->
        </div>
    </li>
@endforeach
</ul>
