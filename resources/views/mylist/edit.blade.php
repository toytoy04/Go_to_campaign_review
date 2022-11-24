@extends('layouts.app')
@section('content')

<form method="post" action="{{ route('mylist.update', ['mylist' => $mylist->id]) }}">
  @csrf
    <input type="text" value="{{ $mylist->name }}" name="name">
    <button type="submit">更新</button>
</form>
@endsection
