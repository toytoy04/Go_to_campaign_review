@extends('layouts.app')
@section('content')

<form action="{{ route('customer.store') }}" method="POST">
  @csrf
  <div>
    <label>申込者名</label>
    <input type="text" name="name">
    @if($errors->has('name'))
      <p>{{ $errors->first('name') }}</p>
    @endif
  </div>
  <div>
    <label>連絡先</label>
    <input type="number" name="phone_number">
    @if($errors->has('phone_number'))
      <p>{{ $errors->first('phone_number') }}</p>
    @endif
  </div>
  <div>
    <label>email</label>
    <input type="text" name="email">
    @if($errors->has('email'))
      <p>{{ $errors->first('email') }}</p>
    @endif
  </div>
  <div>
    <label>証明書</label>
    <select name="covid_document">
      <option value="1">有</option>
      <option value="0">無</option>
    </select>
    @if($errors->has('covid_document'))
      <p>{{ $errors->first('covid_document') }}</p>
    @endif
  </div>
  <input type="submit" value="登録">
</form>
@endsection
