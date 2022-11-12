<form action="{{ route('login') }}" method="POST">
  @csrf
  <div>
    <label>
      <input id="email" type="email" name="email" required>
    </label>
  </div>
  <div>
    <label>
      <input id="password" type="password" name="password" required>
    </label>
  </div>
  <input type="submit" value="ログイン">
</form>
