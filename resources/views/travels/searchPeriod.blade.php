@extends('layouts.app')

@section('content')
<h2>期間集計</h2>

<div>
  <label>申込月：{{ $month_before_last }}月</label>
    <p>申込総額：{{ $month_before_last_travels->sum('cost') }}</p>
    <p>補助金総額：{{ $month_before_last_travels->sum('subsidy') }}</p>
    <p>申込件数：{{ $month_before_last_travels->count('id') }}</p>
    <p>旅行者人数総計：{{ $month_before_last_travels->sum('people') }}</p>
</div>

<div>
  <label>申込月：{{ $last_month }}月</label>
    <p>申込総額：{{ $last_month_travels->sum('cost') }}</p>
    <p>補助金総額：{{ $last_month_travels->sum('subsidy') }}</p>
    <p>申込件数：{{ $last_month_travels->count('id') }}</p>
    <p>旅行者人数総計：{{ $last_month_travels->sum('people') }}</p>
</div>

<div>
  <label>申込月：{{ $this_month }}月</label>
    <p>申込総額：{{ $this_month_travels->sum('cost') }}</p>
    <p>補助金総額：{{ $this_month_travels->sum('subsidy') }}</p>
    <p>申込件数：{{ $this_month_travels->count('id') }}</p>
    <p>旅行者人数総計：{{ $this_month_travels->sum('people') }}</p>
</div>
@endsection
