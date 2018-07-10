@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
    
    <div class="col-md-3">
        <div class='containerirai'>
            <p></p>
            <div class="maste-box">
                <span class='maste-tape'>From {{$user->name}}</span>
                <a href="{{ route('irais.show', $irai->id) }}">    
             @if ($irai->id)
       
               <p>
               {{ $irai->start }}～{{ $irai->finish }}<br>
               {{ $irai->title }}<br>
               
               {{$irai->station}}周辺<br>
               お礼: {{ $irai->reward }}<br><br>
               {{ $irai->comment }}
               </p>
               
               @endif
            </div></a>
        </div>
      
    </div>
    
@endforeach



