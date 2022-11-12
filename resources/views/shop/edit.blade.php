@extends('layouts.app')
@section('content')

<h2>店舗情報</h2>
<h3>編集中</h3>
<form action="{{ route('shop.update', ['shop' => $Shop->id]) }}" method="POST" enctype="multipart/form-data">
  @csrf
<div>
  <label for="name">店舗名</label>
  <input type="text" name="name" id="name" value="{{ $Shop->name }}">
</div>
<div>
  <label for="image_path">写真</label>
  @if(file_exists(public_path('/images/' . $Shop->image_path)))
  <img src="{{ asset('/images/' . $Shop->image_path) }}" alt="{{ $Shop->name }}の写真">
  @else
  <img src="{{ asset('/storage/' . $Shop->image_path) }}" alt="{{ $Shop->name }}の写真">
  @endif
  <input type="file" name="image_path">
</div>
<div>
  <p>営業時間</p>
  <p>{{ $Shop->opening_hours }}</p>
  <label for="opening">開店時間</label>
  <input type="time" id="opening" name="opening" min="00:00" max="15:00">
  <label for="closing">閉店時間</label>
  <input type="time" id="closing" name="closing" min="15:00" max="24:00">
</div>
<div>
  <p>定休日</p>
  <p>{{ $Shop->holiday }}</p>
  <input type="checkbox" id="check01" name="holiday[]" value="月曜日">
  <label for="check01">月曜日</label>
  <input type="checkbox" id="check02" name="holiday[]" value="火曜日">
  <label for="check02">火曜日</label>
  <input type="checkbox" id="check03" name="holiday[]" value="水曜日">
  <label for="check03">水曜日</label>
  <input type="checkbox" id="check04" name="holiday[]" value="木曜日">
  <label for="check04">木曜日</label>
  <input type="checkbox" id="check05" name="holiday[]" value="金曜日">
  <label for="check05">金曜日</label>
  <input type="checkbox" id="check06" name="holiday[]" value="土曜日">
  <label for="check06">土曜日</label>
  <input type="checkbox" id="check07" name="holiday[]" value="日曜日">
  <label for="check07">日曜日</label>
</div>
<div>
  <label for="phone_number">TEL</label>
  <input type="text" name="phone_number" id="phone_number" value="{{ $Shop->phone_number }}">
</div>
<div>
  <label for="phone_number">FAX</label>
  <input type="text" name="fax_number" id="fax_number" value="{{ $Shop->fax_number }}">
</div>
<div>
  <label for="map_image_path">MAP</label>
  @if($Shop->map_image_path)
    @if(file_exists(public_path('/images/' . $Shop->map_image_path)))
    <img src="{{ asset('/images/' . $Shop->map_image_path) }}" alt="{{ $Shop->name }}の地図">
    @else
    <img src="{{ asset('/storage/' . $Shop->map_image_path) }}" alt="{{ $Shop->name }}の地図">
    @endif
  @else
  <img src="{{ asset('/images/noimage.png') }}" alt="No_Image">
  @endif
  <input type="file" name="map_image_path">
</div>
<div>
  <label for="postal_code">郵便番号</label>
  <input type="text" name="postal_code" id="postal_code" value="{{ $Shop->postal_code }}">
</div>
<div>
  <label for="address">住所</label>
  <input type="text" name="address" id="address" value="{{ $Shop->address }}">
</div>
<a href="{{ route('shop.show', ['shop' => $Shop->id]) }}">キャンセル</a>
<input type="submit" value="更新">
</form>
<p>H.R.I TRAVEL</p>
@endsection

