@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    <div class="col-md-3">
        <div class='containerirai'>
            <p></p>
            <a href="{{ route('irais.show', $irai->id) }}" > 
            <div class="maste-box">
                <span class='maste-tape'>From {{$user->name}}</span>
            @if ($irai->id)
                @if (Auth::user()->is_finishing($irai->id))
                    <div class='maste-content'>
                            <br>
                            <h4 class='under'>{{ $irai->title }}</h4>
                            
                            <div id='maste-ryaku'>
                                <h4 class="glyphicon glyphicon-time text-center"></h4><br> {{ $irai->start }}~<br>{{ $irai->finish }}<br>
                                <h4 class="glyphicon glyphicon-map-marker"></h4> {{$irai->station}}<br>
                                <h4 class="glyphicon glyphicon-gift"></h4> {{ $irai->reward }}<br>
                            </div>
                   </div>
                @else
                    <div class='maste-content'>
                            <br>
                            <h4 class='under'>{{ $irai->title }}</h4>
                            <div id='maste-ryaku'>
                                <h4 class="glyphicon glyphicon-time text-center"></h4><br> {{ $irai->start }}~<br>{{ $irai->finish }}<br>
                                <h4 class="glyphicon glyphicon-map-marker"></h4> {{$irai->station}}<br>
                                <h4 class="glyphicon glyphicon-gift"></h4> {{ $irai->reward }}<br>
                            </div>
                   </div>
                @endif
            @endif
            </div>
            </a>
        </div>
    </div>
@endforeach

