@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
        <div id="kanryou-zumi">
        {!! Form::open(['route' => ['irai.unfinish'], 'method' => 'delete']) !!}
        {{Form::hidden('irai_id', $irai->id)}}
        {{Form::hidden('user_id', $user->id)}}
        {!! Form::submit('依頼完了済', ['class' => "btn center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="kanryou">
        {!! Form::open(['route' => 'irai.finish']) !!}
        {{Form::hidden('irai_id', $irai->id)}}
        {{Form::hidden('user_id', $user->id)}}
            {!! Form::submit('依頼を完了する', ['class' => "btn center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif