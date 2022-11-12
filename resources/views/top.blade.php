@extends('layouts.tops')

@section('content')
<div class="top">
    <div class="top-left">
        <div class="top-header">
            <div class="top-header-top">
                <img src="{{ asset('images/logo.png') }}" alt="Go To TRAVELのロゴ">
                <p>Go To TRAVEL</p>
            </div>
            <div class="top-header-bottom">
                <h2>補助金管理</h2>
            </div>
        </div>
        <div class="menu">
            <h3>MENU</h3>
            <ul class="top-menu">
                <li><a href="#">補助金申請</a></li>
                <li><a href="#">申込状況照会</a></li>
                <li><a href="#">期間集計</a></li>
                <li><a href="#">CP進捗状況</a></li>
                <li><a href="#">検索</a></li>
                <li><a href="{{ route('shop.index') }}">店舗情報</a></li>
                <li><a href="{{ route('user.show') }}">スタッフ管理</a></li>
                <li><form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" value="ログアウト">
                </form></li>
            </ul>
        </div>
        <footer>
            <small>H.R.I TRAVEL</small>
        </footer>
    </div>
    <div class="top-right"></div>
</div>
@endsection
