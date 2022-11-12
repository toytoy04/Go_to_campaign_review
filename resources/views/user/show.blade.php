@extends('layouts.app')

@section('content')
@if(session('status'))
<div>{{ session('status') }}</div>
@endif
@if(session('message'))
<div>{{ session('message') }}</div>
@endif
<h3>スタッフ情報</h3>
<div>店舗名:{{ $user->shop->name }}</div>
<div>スタッフ名:{{ $user->name }}</div>
<div>メールアドレス:{{ $user->email }}</div>
<button>
  <a href="{{ route('user.edit') }}">編集</a>
</button>
<a href="{{ route('user.passwordEdit') }}">パスワード変更はこちら</a>
<a href="{{ route('top') }}">TOP</a>
<footer>
  <small>H.R.I TRAVEL</small>
</footer>
@endsection
