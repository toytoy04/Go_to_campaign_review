@extends('layouts.app')
@section('content')

<div>
  <p>Go toトラベル補助金予算</p>
  <p>{{ $budget }}</p>
</div>
<div>
  <p>補助金進捗率</p>
  <p>{{ $allPercentage }}</p>
</div>
<div>
  <p>補助金全店合計登録額</p>
  <p>{{ $totalSubsidy }}</p>
</div>
<div>
  <p>{{ Auth::user()->shop->name }}</p>
</div>
<div>
  <p>補助金申請総額</p>
  <p>{{ $application }}</p>
</div>
<div>
  <p>比率</p>
  <p>{{ $shopPercentage }}</p>
</div>
<div>
  <p>TOP10</p>
  @foreach($ranking as $ranking)
  <p><span>{{ $loop->iteration }}位</span>{{ $ranking->name }}<span>{{ $ranking->travels_count }}件</span></p>
  @endforeach
</div>
@endsection
