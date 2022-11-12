@extends('layouts.app')
@section('content')

<div>
  @foreach($results as $result)
  <a href="{{ route('travel.create', ['customer' => $result]) }}">旅行申請</a>
  <label>申込者</label>
  <p>{{ $result->name }}</p>
  @endforeach
  @if(count($results) === 0)
  <p>該当者はいませんでした。</p>
  @endif
</div>
@endsection
