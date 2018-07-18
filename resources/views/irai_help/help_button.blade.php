@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
        <div id="tetsudai-tyu">
        {!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
            {!! Form::submit('依頼完了済！', ['class' => "btn btn-block center-block btn-danger"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="tetsudai">
        {!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
            {!! Form::submit('手伝いを完了する！', ['class' => "btn center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif