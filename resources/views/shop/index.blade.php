@extends('layouts.app')

@section('content')
<div class="header-under">
    <h3>情報検索</h3>
    <p></p>
    <p>全</p>
    <p>{{ $shops->count() }}</p>
    <p>件</p>
    <button><a href="#">TOP</a></button>
</div>
<div class="shop-list">
    @foreach ($shops as $shop)
    <div>
        <a href="{{ route('shop.show', ['shop' => $shop->id]) }}">
            <p>{{ $shop->name }}</p>
            <p>{{ $shop->phone_number }}</p>
            <p>{{ $shop->fax_number }}</p>
            <p>{{ $shop->postal_code }}</p>
            <p>{{ $shop->address }}</p>
            <p>{{ $shop->opening_hours }}</p>
            <p>{{ $shop->holiday }}</p>
        </a>
    </div>

    @endforeach
</div>
<div class="return">
    <button><a href="#">検索画面へ戻る</a></button>
</div>
<footer>
    <small>H.R.I TRAVEL</small>
</footer>
@endsection
