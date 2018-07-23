    @if ($irai->alive == 0)
    <div id="kaiketsu-zumi">
        <p class='center-block'>解決済み</p>
    </div>
    @else
    <div class='center-block' id="kaiketsu">
        {!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}
        {{Form::hidden('type', 'message')}}
        {!! Form::submit('解決した', ['class' => 'btn center-block']) !!}
        {!! Form::close() !!}
    </div>
    @endif


