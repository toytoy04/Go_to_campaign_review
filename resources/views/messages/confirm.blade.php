@extends('layouts.app')

@section('content')
<h4>この内容で送信してもよろしいですか？</h4>
<form action="{{ route('customer.storeMessage') }}" method="POST">
@csrf
  <label for="email">宛先</label>
  <input type="text" name="email" id="email" value="{{ $confirmMail['email'] }}" readonly>
  <input type="text" name="title" value="{{ $confirmMail['title'] }}" readonly>
  <textarea name="messages">{{ $confirmMail['messages'] }}"</textarea>
  <button type="submit">送信</button>
</form>
@endsection
