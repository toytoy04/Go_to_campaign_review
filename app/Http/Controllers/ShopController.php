<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function top()
    {
        return view('top');
    }

    public function index()
    {
        // ショップの情報取得
        $shops = Shop::all();
        return view('shop.index', compact('shops'));
    }

    public function show(Int $shop)
    {
        $selectedShop = Shop::find($shop);
        $otherShops = Shop::where('id', '<>', $shop)
            ->limit(5)
            ->get();

            return view('shop.show', ['selectedShop' => $selectedShop, 'otherShops' => $otherShops]);
    }

    public function edit(Int $shop)
    {
        $shop = Shop::find($shop);

        return view('shop.edit', ['Shop' => $shop]);
    }

    public function update(Request $request, Int $shop)
    {
        $shop = Shop::find($shop);
        $shop->name = $request->name;
        $shop->phone_number = $request->phone_number;
        $shop->fax_number = $request->fax_number;
        $shop->postal_code = $request->postal_code;
        $shop->address = $request->address;

        if (isset($request->opening) && isset($request->closing)){
            $opening_hours = $request->opening. '～' .$request->closing;
            $shop->opening_hours = $opening_hours;
        }

        if (isset($request->holiday)){
            $holiday = implode('・', $request->holiday);
            $shop->holiday = $holiday;
        }

        if (isset($request->image_path)){
            $image_name = $request->image_path->getClientOriginalName();
            $shop->image_path = $image_name;
            $request->image_path->storeAs('', $image_name, 'public');
        }

        if (isset($request->map_image_path)){
            $map_name = $request->map_image_path->getClientOriginalName();
            $shop->map_image_path = $map_name;
            $request->map_image_path->storeAs('', $map_name, 'public');
        }

        $shop->save();

        return redirect()->route('shop.show', ['shop' => $shop]);
    }
}
