@extends('layouts.app')
@section('content')

<div class="travel-header">
    <h3>補助金申請</h3>
    <div class="travel-header-right">
        <label>担当者</label>
        <p>{{ Auth::user()->name }}</p>
        <p>【適用ルール】</p>
        <button><a href="{{ route('top') }}">TOP</a></button>
    </div>
</div>

<form action="{{ route('travel.store') }}" method="POST">
  @csrf
    <div class="travel-container">
        <div class="travel-left">
            <div class="form">
                <label>申込日</label>
                <input type="date" name="application_date">
                @if($errors->has('application_date'))
                <p>{{ $errors->first('application_date') }}</p>
                @endif
            </div>
            <div class="form">
                <label>出発日</label>
                <input type="date" name="departure_date">
                @if($errors->has('departure_date'))
                <p>{{ $errors->first('departure_date') }}</p>
                @endif
            </div>
            <div class="form">
                <label>旅行日数</label>
                <select name="day">
                <option value="1泊2日">1泊2日</option>
                <option value="2泊3日">2泊3日</option>
                <option value="3泊4日">3泊4日</option>
                <option value="4泊5日">4泊5日</option>
                <option value="5泊6日">5泊6日</option>
                </select>
                @if($errors->has('day'))
                <p>{{ $errors->first('day') }}</p>
                @endif
            </div>
            <div class="form">
                <label>人数</label>
                <select name="people">
                <option value="1">1人</option>
                <option value="2">2人</option>
                <option value="3">3人</option>
                <option value="4">4人</option>
                <option value="5">5人</option>
                </select>
                @if($errors->has('people'))
                <p>{{ $errors->first('people') }}</p>
                @endif
            </div>
            <div class="form">
                <label>地域</label>
                <select name="region_id">
                @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
                @endforeach
                </select>
                @if($errors->has('region_id'))
                <p>{{ $errors->first('region_id') }}</p>
                @endif
            </div>
            <div class="form">
                <label>総額</label>
                <input type="number" name="cost" value="40000">
                @if($errors->has('cost'))
                <p>{{ $errors->first('cost') }}</p>
                @endif
            </div>
        </div>

        <div class="travel-right">
            <div class="form">
                <label>旅行者ID</label>
                <input type="number" name="customer_id" value="{{ $customer->id }}" readonly>
                @if($errors->has('customer_id'))
                <p>{{ $errors->first('customer_id') }}</p>
                @endif
            </div>
            <div class="form">
                <label>申込者名</label>
                <input type="text" name="name" value="{{ $customer->name }}" readonly>
            </div>
            <div class="form">
                <label>連絡先</label>
                <input type="number" name="phone_number" value="{{ $customer->phone_number }}" readonly>
            </div>
            <div class="form">
                <label>証明書</label>
                <select name="covid_document">
                <option value="1" @if($customer->covid_document === 1) selected @endif>有</option>
                <option value="0" @if($customer->covid_document === 0) selected @endif>無</option>
                </select>
            </div>
            <input type="submit" value="登録" class="submit">
        </div>
    </div>

    <div class="travel-bottom">
        <div class="bottom-form">
            <label>補助金額</label>
            <input type="number" name="subsidy" value="2000">
            @if($errors->has('subsidy'))
            <p>{{ $errors->first('subsidy') }}</p>
            @endif
        </div>
        <div class="bottom-form">
            <label>クーポン枚数</label>
            <input type="number" name="coupon" value="5">枚
            @if($errors->has('coupon'))
            <p>{{ $errors->first('coupon') }}</p>
            @endif
        </div>
    </div>
</form>
@endsection
