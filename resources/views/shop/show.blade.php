@extends('layouts.app')
@section('content')

<div class="shop-header">
    <div class="shop-header-left">
        <h2>店舗情報</h2>
        <div class="shop-list">
            @foreach($otherShops as $otherShop)
            <a href="{{ route('shop.show', ['shop' => $otherShop->id]) }}">{{ $otherShop->name }}</a>
            @endforeach
        </div>
    </div>
    <button><a href="{{ route('top') }}">TOP</a></button>
</div>

<div class="shop-container">
    <div class="shop-show-left">
        <div class="shop-exterior">
            <p>{{ $selectedShop->name }}</p>
            <img src="/images/{{ $selectedShop->image_path }}" alt="{{ $selectedShop->name }}の写真">
        </div>
        <div>
            <p>営業時間</p>
            <p>{{ $selectedShop->opening_hours }}</p>
        </div>
        <div>
            <p>定休日</p>
            <p>毎週{{ $selectedShop->holiday }}</p>
        </div>
        <div>
            <p>TEL</p>
            <p>{{ $selectedShop->phone_number }}</p>
        </div>
        <div>
            <p>FAX</p>
            <p>{{ $selectedShop->fax_number }}</p>
        </div>
    </div>

    <div class="shop-show-right">
        <div class="map-info">
            <p>MAP</p>
            @if($selectedShop->map_image_path)
            <img src="{{ asset('/images/' . $selectedShop->map_image_path) }}" alt="{{ $selectedShop->name }}の地図">
            @else
            <img src="{{ asset('/images/noimage.png') }}" alt="No_Image">
            @endif
        </div>
        <div>
            <p>住所</p>
            <p>{{ $selectedShop->postal_code }}</p>
            <p>{{ $selectedShop->address }}</p>
        </div>
        <div class="update">
            <button class="shop-edit"><a href="{{ route('shop.edit', ['shop' => $selectedShop->id]) }}">編集</a></button>
        </div>
    </div>
</div>

<footer>
<small>H.R.I TRAVEL</small>
</footer>

@endsection
