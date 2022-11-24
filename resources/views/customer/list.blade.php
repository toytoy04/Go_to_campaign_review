@extends('layouts.app')
@section('content')

<h2>顧客一覧</h2>
<div>
  @foreach($customers as $customer)
  <p><span>{{ $customer->id }}</span>{{ $customer->name }}</p><br>
  <form method="post" action="{{ route('mylist.store') }}">
    @csrf
    <select name="mylist_id">
      @foreach($mylists as $mylist)
      <option value="{{ $mylist->id }}">{{ $mylist->name }}</option>
      @endforeach
    </select>
    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
    <button type="submit">リストに追加</button>
  </form>
  @endforeach
  <form method="post" action="{{ route('mylist.create') }}">
    @csrf
    <input type="text" name="name" placeholder="リスト名">
    <button type="submit">リスト作成</button>
  </form>
</div>
@endsection
