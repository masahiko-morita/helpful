@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    
    <div class="col-md-3">
        <div class='containerirai'>
            <p></p>

            <a href="{{ route('irais.show', $irai->id) }}" > 

            <div class="maste-box">
                  
                <span class='maste-tape'>From {{$user->name}}</span>
                 
             @if ($irai->id)
       
               <div class='maste-content'>
                <br>
                <h4 class='under'>{{ $irai->title }}</h4>

                <div class='maste-btn'>
<<<<<<< HEAD
                    @if (Auth::check())
                    {!! Form::open(['route' => ['irais.thankyou', $irai->id], 'method' => 'get']) !!}
                    {!! Form::submit('手伝う！！！', ['class' => 'btn center-block']) !!}
                    {!! Form::close() !!}
=======
                    @if (Auth::user() == null)
                
                    @elseif(Auth::user()->id != $irai->user_id)
                        {!! Form::open(['route' => ['irais.thankyou', $irai->id], 'method' => 'get']) !!}
                            {!! Form::submit('手伝う！！！', ['class' => 'btn btn-success btn-sm']) !!}
                        {!! Form::close() !!}
>>>>>>> 387fcd613adec37a2fa25000152d68dd445c0c1a
                    @endif
                </div>

                <h4 class="glyphicon glyphicon-time text-center"></h4><br> {{ $irai->start }}~<br>{{ $irai->finish }}<br>
                <h4 class="glyphicon glyphicon-map-marker"></h4> {{$irai->station}}<br>
                <h4 class="glyphicon glyphicon-heart"></h4> {{ $irai->reward }}<br>
               </div>

               @endif
               
            </div>
            </a>
        </div>
      
    </div>

    
@endforeach



