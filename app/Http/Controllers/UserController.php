<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Shop;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('user.show', compact('user'));
    }

    public function passwordEdit()
    {
        return view('auth.passwords.edit');
    }

    public function passwordUpdate(Request $request)
    {
        $user = \Auth::user();

        $request->validate([
            'newPassword' => 'required|string|min:6|max:12|confirmed|alpha_num',
            'newPassword_confirmation' => 'required',
        ],[
            'newPassword.required' => '新しいパスワードは入力必須です',
            'newPassword.min' => '最低6文字以上必要です',
            'newPassword.max' => '入力の上限を超えています',
            'newPassword.confirmed' => '再入力したパスワードが一致しません',
            'newPassword.alpha_num' => '半角英数字のみ入力可能です',
            'newPassword_confirmation.required' => '再入力は必須です',
        ]);

        $user->password = Hash::make($request->newPassword);
        $user->save();

        return redirect()->route('user.show')
            ->with('status', 'パスワードの変更が無事完了致しました。');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function update(Request $request)
    {
        Auth::user()->fill($request->all())->save();

        return redirect()->route('user.show')->with('message', '編集が完了しました');
    }

        public function home()
    {
        $shops = Shop::all();
        return view('home', compact('shops'));
    }
}
