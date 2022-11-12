@extends('layouts.app')

@section('content')

<p>情報検索</p>
<p>※一つの項目入力で検索が可能です。</p>
<a href="{{ route('top') }}"><button>TOP</button></a>

<div>
  <form method="get" action="{{ route('travel.results') }}">
    @csrf
    <label>申込日</label>
    <input type="date" name="application_start">
    <input type="date" name="application_end">

    <label>出発日</label>
    <input type="date" name="departure_start">
    <input type="date" name="departure_end">

    <label>地域</label>
    <select name="region_id">
      @foreach($regions as $region)
        <option value="{{ $region->id }}">{{ $region->name }}</option>
      @endforeach
    </select>

    <label>総額</label>
    <input type="number" name="cost_start">
    <input type="number" name="cost_end">

    <label>担当者</label>
    <input type="number" name="user_id">

    <label>お客様ID</label>
    <input type="text" name="customer_id">

    <label>申込者</label>
    <input type="text" name="name">

    <label>電話番号</label>
    <input type="tel" name="phone_number">

    <label>証明書</label>
    <select name="covid_document">
      <option value="1">有</option>
      <option value="0">無</option>
    </select>

    <button type="submit">検索</button>
  </form>
</div>

@endsection
