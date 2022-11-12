@extends('layouts.app')
@section('content')

<h2>申込詳細情報</h2>
<h3>編集中</h3>
<form action="{{ route('travel.update', ['travel' => $travel->id]) }}" method="POST">
  @csrf
  <div>
    <label for="application_date">申込日</label>
    <input type="date" name="application_date" id="application_date" value="{{ $travel->application_date }}" readonly>
    @if($errors->has('application_date'))
      <p>{{ $errors->first('application_date') }}</p>
    @endif
  </div>
  <div>
    <label for="departure_date">出発日</label>
    <input type="date" name="departure_date" id="departure_date" value="{{ $travel->departure_date }}">
    @if($errors->has('departure_date'))
      <p>{{ $errors->first('departure_date') }}</p>
    @endif
  </div>
  <div>
    <label for="day">旅行日数</label>
    <select name="day" id="day">
      <option value="1泊2日" @if($travel->day === '1泊2日') selected @endif>1泊2日</option>
      <option value="2泊3日" @if($travel->day === '2泊3日') selected @endif>2泊3日</option>
      <option value="3泊4日" @if($travel->day === '3泊4日') selected @endif>3泊4日</option>
      <option value="4泊5日" @if($travel->day === '4泊5日') selected @endif>4泊5日</option>
      <option value="5泊6日" @if($travel->day === '5泊6日') selected @endif>5泊6日</option>
    </select>
    @if($errors->has('day'))
      <p>{{ $errors->first('day') }}</p>
    @endif
  </div>
  <div>
    <label for="people">人数</label>
    <input type="number" step="1" id="people" value="{{ $travel->people }}" min="1" name="people">
    @if($errors->has('people'))
      <p>{{ $errors->first('people') }}</p>
    @endif
  </div>
  <div>
    <label>地域</label>
    <select name="region_id">
      @foreach($regions as $region)
      <option value="{{ $region->id }}" @if($travel->region->name === $region->name) selected @endif>{{ $region->name }}</option>
      @endforeach
    </select>
    @if($errors->has('region_id'))
      <p>{{ $errors->first('region_id') }}</p>
    @endif
  </div>
  <div>
    <label>旅行者ID</label>
      <input type="number" id="customer_id" value="{{ $travel->customer_id }}" name="customer_id" readonly>
  </div>
  <div>
    <label>申込者<span>フルネーム（カナ）</span></label>
    <input type="text" id="name" value="{{ $travel->customer->name }}" name="name">
    @if($errors->has('name'))
      <p>{{ $errors->first('name') }}</p>
    @endif
  </div>
  <div>
    <lavel>連絡先</lavel>
    <input type="tel" id="phone_number" value="{{ $travel->customer->phone_number }}" name="phone_number">
    @if($errors->has('phone_number'))
      <p>{{ $errors->first('phone_number') }}</p>
    @endif
  </div>
  <div>
    <lavel>証明書</lavel>
    <select name="covid_document">
      <option value="1" @if($travel->customer->covid_document === 1) selected @endif>有</option>
      <option value="0" @if($travel->customer->covid_document === 0) selected @endif>無</option>
    </select>
    @if($errors->has('covid_document'))
      <p>{{ $errors->first('covid_document') }}</p>
    @endif
  </div>
  <div>
    <label for="cost">総額</label>
    <input type="number" id="coupon" value="{{ $travel->cost }}" name="cost">
    @if($errors->has('cost'))
      <p>{{ $errors->first('cost') }}</p>
    @endif
  </div>
  <div>
  <label for="subsidy">補助金額</label>
    <input type="number" id="subsidy" value="{{ $travel->subsidy }}" name="subsidy">
    @if($errors->has('subsidy'))
      <p>{{ $errors->first('subsidy') }}</p>
    @endif
  </div>
  <div>
    <label for="coupon">クーポン枚数</label>
    <input type="number" id="coupon" value="{{ $travel->coupon }}" name="coupon">
    @if($errors->has('coupon'))
      <p>{{ $errors->first('coupon') }}</p>
    @endif
  </div>
  <a href="{{ route('travel.show', ['travel' => $travel->id]) }}">キャンセル</a>
  <input type="submit" value="更新">
</form>
@endsection
