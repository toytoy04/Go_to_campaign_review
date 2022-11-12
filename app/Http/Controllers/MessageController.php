<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Message;

class MessageController extends Controller
{

  public function index()
  {
    return view('messages.index');
  }

  public function create()
  {
    return view('messages.create');
  }

  public function confirm(Request $request)
  {
    $confirmMail = $request->all();

    return view('messages.confirm', compact('confirmMail'));
  }

  public function store(Request $request)
  {
    $message = new Message();
    $message->user_id = Auth::id();
    $message->sent_date = now();
    $message->fill($request->all());
    $message->save();

    return redirect()->route('customer.showMessage');
  }
}
