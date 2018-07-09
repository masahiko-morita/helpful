@foreach ($irais as $irai)
    <?php $user = $irai->user; ?>
<div id="contentContainer" class="trans3d"> 
    <section id="carouselContainer" class="trans3d">
        <figure id="item1" class="carouselItem trans3d">
            <div class="carouselItemInner trans3d">
                <a href="{{ route('irais.show', $irai->id) }}">    
             @if ($irai->id)
       
               <p>From {{ $user->name }}<br><br>
               {{ $irai->start }}～{{ $irai->finish }}<br>
               {{ $irai->title }}<br>
               
               {{$irai->station}}周辺<br>
               お礼: {{ $irai->reward }}<br><br>
               {{ $irai->comment }}
               </p>
               
               @endif
            </div></a>
        </figure>
     </section>
</div>
@endforeach



