@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
        <div id="tetsudai-tyu">
        {!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
            {!! Form::submit('依頼を完了する', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="tetsudai">
        {!! Form::open(['route' => ['irai.help', $irai->id]]) !!}
            {!! Form::submit('手伝う', ['class' => "btn center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif