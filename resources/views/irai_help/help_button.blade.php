@if (Auth::id() != $user->id)
    @if (Auth::user()->is_helping($irai->id))
        <div id="kanryou-zumi">
        {!! Form::open(['route' => ['irai.unhelp', $irai->id], 'method' => 'delete']) !!}
            {!! Form::submit('手伝い中', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="kanryou">
        {{!! Form::open(['route' => ['irai.help', $irai->id]]) !!}
            {!! Form::submit('手伝う！', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif