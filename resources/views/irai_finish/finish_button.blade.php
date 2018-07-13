@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
        <div id="kanryou-zumi">
<<<<<<< HEAD
        <!--{!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}-->
=======
        <!--最終的にはここのるーと消したい-->
        {!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}
>>>>>>> 9295a6a67e72629e4aacb9cef55d02b52fa775b8
        {!! Form::submit('依頼完了済', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="kanryou">
        {{!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
            {!! Form::submit('依頼を完了する', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif