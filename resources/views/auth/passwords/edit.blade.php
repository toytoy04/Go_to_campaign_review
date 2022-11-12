@extends('layouts.app')
@section('content')
<form action="{{ route('user.passwordUpdate') }}" method="POST" onsubmit="return check()">
  @csrf
  <div>
    <h2>新しいパスワード</h2>
    <h4>(必須)</h4>
      <input type="password" name="newPassword">
      @if($errors->has('newPassword'))
        <p>{{ $errors->first('newPassword') }}</p>
      @endif
  </div>
  <div>
    <h2>パスワード再入力</h2>
    <h4>(必須)</h4>
      <input type="password" name="newPassword_confirmation">
      @if($errors->has('newPassword_confirmation'))
        <p>{{ $errors->first('newPassword_confirmation') }}</p>
      @endif
  </div>
  <div class="passwordUpdate">
    <button type="submit">更新</button>
  </div>
  <div class="update">
    <a href="{{ route('user.show') }}">キャンセル</a>
  </div>
</form>
@endsection
