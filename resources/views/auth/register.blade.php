<form action="{{ route('register') }}" method="POST">
  @csrf
  <div>
    <label>
      店舗名:
      <select name="shop_id">
        <option value="1">test1</option>
        <option value="2">test2</option>
        <option value="3">test3</option>
        <option value="4">test4</option>
        <option value="5">test5</option>
        <option value="6">test6</option>
        <option value="7">test7</option>
        <option value="8">test8</option>
        <option value="9">test9</option>
        <option value="10">test10</option>
      </select>
    </label>
  </div>
  <div>
    <label>
      スタッフ名:
      <input type="text" name="name" required>
    </label>
  </div>
  <div>
    <label>
      メールアドレス:
      <input type="email" name="email" required>
    </label>
  </div>
  <div>
    <label>
      ログインパスワード:
      <input type="password" name="password" required>
    </label>
  </div>
  <div>
    <label>
      ログインパスワード再入力:
      <input type="password" name="password_confirmation" required>
    </label>
  </div>
  <input type="submit" value="新規登録">
</form>
