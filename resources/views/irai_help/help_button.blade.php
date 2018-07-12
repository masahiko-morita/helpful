@if (Auth::id() != $user->id)
    @if (Auth::user()->is_helping($irai->id))
        <div id="tetsudai-now">
        <!--{!! Form::open(['route' => ['irai.unhelp', $irai->id], 'method' => 'delete']) !!}-->
            {!! Form::submit('手伝い中', ['class' => "btn center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="tetsudai">
        {{!! Form::open(['route' => ['irai.help', $irai->id]]) !!}
            {!! Form::submit('手伝う！', ['class' => "btn center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif