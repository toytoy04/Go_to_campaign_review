@extends('layouts.app')

@section('content')
<h3>タスク管理</h3>
  <h4>申込者情報</h4>
    <div>
      <p>旅行者ID：{{ $travel->customer->id }}ー{{ $travel->id }}</p>
      <p>申込者：{{ $travel->customer->name }}</p>
      <p>連絡先：{{ $travel->customer->phone_number }}</p>
      <p>mail address：</p>
      <a href="#">メール詳細</a>
    </div>
  <h4>申込内容</h4>
    <div>
      <p>申込日：{{ $travel->application_date }}</p>
      <p>出発日：{{ $travel->departure_date }}</p>
      <p>旅行日数：{{ $travel->day }}</p>
      <p>人数：{{ $travel->people }}人</p>
      <p>方面：{{ $travel->region->name }}</p>
      @if($travel->customer->covid_document === 1)
      <p>証明書有</p>
      @else
      <p>証明書無</p>
      @endif
      <p>総額：￥{{ $travel->cost }}</p>
      <p>補助金額：￥{{ $travel->subsidy }}</p>
      <p>クーポン枚数：{{ $travel->coupon }}枚</p>
    </div>
  <table>
    <h4>【タスク管理】</h4>
        <tr>
          <th>項目</th>
          <th>期日</th>
          <th>完了</th>
        </tr>
        <form action="{{ route('task.update', ['travel' => $travel->id]) }}" method="POST">
          @csrf
          <td><button type="submit">更新</button></td>
    @foreach($travel->tasks as $task)
        <tr>
          <input type="hidden" name="id[]" value="{{ $task->id }}">
          <td><input type="text" name="title[]" value="{{ $task->title }}"></td>
          <td><input type="date" name="deadline[]" value="{{ $task->deadline }}"></td>
          @if($task->isFinished === 1)
          <td><input type="checkbox" name="isFinished[]" value="{{ old($task->isFinished) }}" checked></td>
          @else
          <td><label><input type="checkbox" name="isFinished[]" value="{{ old($task->isFinished) }}"></label></td>
          @endif
        </tr>
    @endforeach
    </form>
    <form action="{{ route('task.store', ['travel' => $travel->id]) }}" method="POST">
    @csrf
        <tr>
          <td><input type=text name="title"></td>
          <td><input type=date name="deadline"></td>
          <td><label><input type=checkbox name="isFinished" value="1"></label></td>
          <td><button type="submit">追加</button></td>
        </tr>
    </form>
  </table>
<div>
  <a href="{{ route('travel.show', $travel->customer->id) }}">戻る</a>
  <a href="{{ route('travel.index') }}">申込状況詳細へ</a>
</div>
@endsection
