@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
        <div id="kanryou-zumi">
        <!--最終的にはここのるーと消したい-->
        {!! Form::open(['route' => ['irai.unfinish', $irai->id], 'method' => 'delete']) !!}
        {!! Form::submit('依頼完了済', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @else
    <div id="kanryou">
        {!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
<<<<<<< HEAD
        <!--{!! Form::open(['route' => ['irai.unhelp', $irai->id], 'method' => 'delete']) !!}-->
=======
>>>>>>> 18aed39bcd8c41f9d216ce198b2155521f2c3eec
            {!! Form::submit('依頼を完了する', ['class' => "btn btn-block center-block"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
@endif