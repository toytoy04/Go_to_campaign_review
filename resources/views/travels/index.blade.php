@extends('layouts.app')

@section('content')
<div>
    <h3>申込状況照会</h3>
    <p>適用ルール</p>
    <button><a href="{{ route('top') }}">TOP</a></button>
</div>
<div>
    @foreach ($travels as $travel)
    <div>
        <a href="{{ route('travel.show', ['travel' => $travel->id]) }}">
            <label>出発日：</label>
            <p>{{ $travel->departure_date }}</p>
            <label>申込者：</label>
            <p>{{ $travel->customer->name }}</p>
            <label>補助金額：</label>
            <p>{{ $travel->subsidy }}</p>
            <label>クーポン枚数：</label>
            <p>{{ $travel->coupon }}</p>
        </a>
    </div>
    @endforeach
</div>
<footer>
    <small>H.R.I TRAVEL</small>
</footer>
@endsection
