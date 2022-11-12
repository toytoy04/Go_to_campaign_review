@extends('layouts.app')

@section('content')
<h3>スタッフ情報編集</h3>
    <form action="{{ route('user.update') }}" method="POST">
        @csrf
        <label>店舗名：</label>
        <input type="text"  value="{{ Auth::user()->shop->name }}" disabled>
        <label>スタッフ名：</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}">
        <label>メールアドレス：</label>
        <input type="text" name="email" value="{{ Auth::user()->email }}">
        <input type="submit" value="更新">
    </form>
    <a href="{{ route('user.show') }}">戻る</a>
    <a href="{{ route('top') }}">TOP</a>

<footer>
    <small>H.R.I TRAVEL</small>
</footer>
@endsection
