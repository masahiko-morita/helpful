 @extends('layouts.app')

@section('content')
      
<div class="container">
    <div class="row text-center">
        <div class="col-md-4">
                はるな　
        </div>
        <div class="col-md-4">
                場所<br>
                タイトル
        </div>
        <div class="col-md-4">
                対価　
        </div>
    </div>
    <div class='text-center'>
        コンテンツ
    </div>
    
    <div class="row text-center">
        <div class="col-md-6">
                １００円
        </div>
        <div class="col-md-6">
                <button type="submit" class="btn btn-default">購入</button>
                <p>{!! link_to_route('general.thankyou', 'View profile') !!}</p>
                
        </div>
    </div>
</div>
@endsection