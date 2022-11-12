@extends('layouts.app')

@section('content')

<p>情報検索</p>
<p>全{{ count($results) }}件</p>
<a href="{{ route('top') }}"><button>TOP</button></a>

<div>
  <label>申込日</label>
    @if(isset($request->application_start))
    <p>{{ $request->application_start }}</p>
    @endif
    @if(isset($request->application_end))
    <p>{{ $request->application_end }}</p>
    @endif
  <label>出発日</label>
    @if(isset($request->departure_start))
    <p>{{ $request->departure_start }}</p>
    @endif
    @if(isset($request->departure_end))
    <p>{{ $request->departure_end }}</p>
    @endif
  <label>地域</label>
    @if(isset($prefecture->name))
    <p>{{ $prefecture->name }}</p>
    @endif
  <label>総額</label>
    @if(isset($request->cost))
    <p>{{ $request->cost }}</p>
    @endif
  <label>担当者</label>
    @if(isset($request->user_id))
    <p>{{ $request->user_id }}</p>
    @endif
  <label>お客様ID</label>
    @if(isset($request->customer_id))
    <p>{{ $request->customer_id }}</p>
    @endif
  <label>申込者</label>
    <p>カナ</p>
    @if(isset($request->name))
    <p>{{ $request->name }}</p>
    @endif
  <label>電話番号</label>
    @if(isset($request->phone_number))
    <p>{{ $request->phone_number }}</p>
    @endif
  <label>証明書</label>
    @if(isset($request->covid_document))
      @if($request->covid_document === '1')
        <p>有</p>
      @else
        <p>無</p>
      @endif
    @endif
</div>

<div>
  @foreach($results as $result)
    <a href="/travel/{{ $result->id }}">
      <label>出発日：</label>
      <p>{{ $result->departure_date }}</p>
      <label>申込者：</label>
      <p>{{ $result->name }}</p>
      <br>
    </a>
  @endforeach

  @if(count($results) === 0)
  <p>該当者はいませんでした。</p>
  @endif
</div>

<a href="{{ route('travel.search') }}"><button>検索画面へ戻る</button></a>

@endsection
