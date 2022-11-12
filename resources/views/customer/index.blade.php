@extends('layouts.app')
@section('content')

<p>情報検索</p>
<p>※一つの項目入力で検索が可能です。</p>
<div>
  <form method="get" action="{{ route('customer.result') }}">
    @csrf
    <label>申込者</label>
    <input type="text" name="name">
    <label>電話番号</label>
    <input type="tel" name="phone_number">
    <button type="submit">検索</button>
  </form>
</div>
@endsection
