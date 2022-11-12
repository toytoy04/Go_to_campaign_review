@extends('layouts.app')

@section('content')
<div>
    <h3>タスク管理</h3>
    <p>担当者</p>
    <p>{{ Auth::user()->name }}</p>
    <button><a href="#">更新</a></button>
</div>
<div>
    <label>旅行者ID</label>
    <label>旅行ID{{ $travel->id }}</label>
</div>
<div>
    <h3>【タスク管理】</h3>
</div>
<div>
    <form action="{{ route('travel.memo.store', ['travel' => $travel->id]) }}" method="POST">
        @csrf
        <p>【メモ】</p>
        <textarea name="text"cols="30" rows="5"></textarea>
        <input type="submit" value="登録">
    </form>

</div>
<div>
    @foreach ($travel->memos as $memo)
    <div>
        <input type="checkbox">
        <p>{{ $memo->text }}</p>
        <p>{{ \Carbon\Carbon::parse($memo->created_at)->format('Y/m/d') }}</p>
        <p>{{ $memo->user->name }}</p>
    </div>
    @endforeach
</div>
<footer>
    <small>H.R.I TRAVEL</small>
</footer>
@endsection
