@extends('layouts.app')

@section('content')
<h1>新規メール作成</h1>
<form action="{{ route('customer.confirmMessage') }}" method="POST">
@csrf
  <label for="email">宛先</label>
  <input type="text" name="email" id="email">
  <input type="text" name="title" placeholder="タイトル">
  <textarea name="messages" placeholder="本文"></textarea>
  <button type="submit">送信</button>
</form>
@endsection
