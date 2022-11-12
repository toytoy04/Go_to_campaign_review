@extends('layouts.app')

@section('content')
<script type="text/javascript">
    function check() {
        if (window.confirm('削除をしてよろしいですか？')) {
            return true;
        } else {
            window.alert('削除がキャンセルされました');
            return false;
        }
    }
</script>
<table>
  <tr>
    <th>申込日{{ $travel->application_date }}</th>
    <th>出発日{{ $travel->departure_date }}</th>
    <th>旅行日数{{ $travel->day }}</th>
    <th>人数{{ $travel->people }}</th>
    <th>方面{{ $travel->region->name }}{{ $travel->region->prefecture_name }}</th>
    <th>総額¥{{ $travel->cost }}</th>
    <th>旅行者ID{{ $travel->id }}</th>
    <th>申込者{{ $travel->customer->name }}</th>
    <th>連絡先{{ $travel->customer->phone_number }}</th>
    @if($travel->customer->covid_document == 1)
    <th>証明書有</th>
    @else
    <th>証明書無</th>
    @endif
    <th>補助金額{{ $travel->subsidy }}</th>
    <th>クーポン枚数{{ $travel->coupon }}</th>
  </tr>
</table>
<div class="delete">
  <form action="{{ route('travel.delete', $travel->customer->id) }}" method="POST" onsubmit="return check()">
    @csrf
    @method('delete')
    <button type="submit">削除</button>
  </form>
</div>
<div class="update">
  <a href="{{ route('travel.edit', $travel->customer->id) }}">編集</a>
</div>
@endsection
