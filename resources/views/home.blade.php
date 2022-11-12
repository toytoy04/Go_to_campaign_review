<!DOCTYPE HTML>
<html lang="ja"></html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <div class="title">
    <h5>Go To TRAVEL</h5>
    <h1>補助金管理</h1>
  </div>
  @csrf
  <div class="login_register">
    <h4>補助金登録はこちらから</h4>
    <a href="{{ route('login') }}">LOGIN</a>
    <a href="{{ route('register') }}">新規スタッフ登録はこちら</a>
  </div>
  <div class="shop_show">
    <select name="shop_id">
      @foreach($shops as $shop)
      <option value="{{ route('shop.show', ['shop' => $shop->id]) }}">{{ $shop->name }}</option>
      @endforeach
    </select>
    <button class="btn">
      <img src="{{ asset('images/search_icon.png') }}">
    </button>
  </div>
  <footer>
    <small>H.R.I TRAVEL</small>
  </footer>
</body>
</html>
