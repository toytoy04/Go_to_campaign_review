@extends('layouts.app')

@section('content')
<a href="{{ route('customer.createMessage') }}">新規作成</a>
<h3>送信履歴</h3>
<div>
@foreach(Auth::user()->messages as $message)
<div class="sent_message" data-date="{{ $message->sent_date }}" data-email="{{ $message->email }}" data-title="{{ $message->title }}" data-messages="{{ $message->messages }}">
  <p>{{ $message->sent_date }}</p>
  <p>{{ $message->title }}</p>
</div>
@endforeach
</div>
<div>
  <p id="date"></p>
  <p id="email"></p>
  <p id="title"></p>
  <p id="message"></p>
</div>
@endsection
