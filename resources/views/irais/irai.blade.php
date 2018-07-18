@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    
    <div class="col-md-3">
        <div class='containerirai'>
            <p></p>
            <div class="maste-box">
                  
                <span class='maste-tape'>From {{$user->name}}</span>
                 
                @if ($irai->id)
                   @if (Auth::user()->is_finishing($irai->id))
                   <a href="{{ route('irais.show', $irai->id) }}" > 
                   <div class='maste-content'>
                            <h4 class='under'>{{ $irai->title }}</h4>
                            <div class='maste-btn'>
                                @if (Auth::user() == null)
                            
                                @elseif(Auth::user()->id != $irai->user_id)
                                        <div class="kanryou-zumi">
                                         @include('irai_finish.finish_button', ['user' => $user])
                                        </div>
                                @endif
                            </div>
            
                            <h4 class="glyphicon glyphicon-time text-center"></h4><br> {{ $irai->start }}~<br>{{ $irai->finish }}<br>
                            <h4 class="glyphicon glyphicon-map-marker"></h4> {{$irai->station}}<br>
                            <h4 class="glyphicon glyphicon-gift"></h4> {{ $irai->reward }}<br>
                   </div>
                   </a>
                @elseif (Auth::user()->is_helping($irai->id))
                    <a href="{{ route('irais.thankyou', $irai->id) }}" > 
                    <div class='maste-content'>
                            <br>
                            <h4 class='under'>{{ $irai->title }}</h4>
            
                            <div class='maste-btn'>
                                @if (Auth::user() == null)
                                
                            
                                @elseif(Auth::user()->id != $irai->user_id)
                                    @include('irai_help.help_button', ['user' => $user])
                                    
                                
                                    
                                
                                @endif
                            </div>
                            <h4 class="glyphicon glyphicon-time text-center"></h4><br> {{ $irai->start }}~<br>{{ $irai->finish }}<br>
                            <h4 class="glyphicon glyphicon-map-marker"></h4> {{$irai->station}}<br>
                            <h4 class="glyphicon glyphicon-gift"></h4> {{ $irai->reward }}<br>
                   </div>
                   </a>
                    @else
                    <a href="{{ route('irais.show', $irai->id) }}" > 
                    <div class='maste-content'>
                            <br>
                            <h4 class='under'>{{ $irai->title }}</h4>
            
                            <div class='maste-btn'>
                                @if (Auth::user() == null)
                            
                                @elseif(Auth::user()->id != $irai->user_id)
                                    @include('irai_help.help_button', ['user' => $user])
                                    
                                
                                    
                                
                                @endif
                            </div>
                            <h4 class="glyphicon glyphicon-time text-center"></h4><br> {{ $irai->start }}~<br>{{ $irai->finish }}<br>
                            <h4 class="glyphicon glyphicon-map-marker"></h4> {{$irai->station}}<br>
                            <h4 class="glyphicon glyphicon-gift"></h4> {{ $irai->reward }}<br>
                   </div>
                   </a>
                   @endif
               @endif
            </div>
        </div>
      
    </div>

    
@endforeach



