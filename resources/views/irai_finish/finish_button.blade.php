@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
        <div id="kanryou-zumi">
        {!! Form::submit('依頼完了済', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="kanryou">
        {!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
            {!! Form::submit('依頼を完了する', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif