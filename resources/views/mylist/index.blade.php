@extends('layouts.app')
@section('content')

<div>
  <form method="POST" action="{{ route('mylist.index') }}">
    @csrf
    <div class="mylists">
    @foreach ($mylists as $mylist)
    <div>
      <p>{{ $mylist->id }}</p>
      <p>{{ $mylist->name }}</p>
    </div>
  </form>
  <div class="delete">
  <form action="{{ route('mylist.delete', ['mylist' => $mylist->id]) }}" method="POST" onsubmit="return check()">
    @csrf
    <button type="submit">削除</button>
  </form>
  <li class="button-list"><a href="{{ route('mylist.edit', ['mylist' => $mylist->id]) }}">編集</a></li>
    @endforeach
    </div>
</div>
@endsection
