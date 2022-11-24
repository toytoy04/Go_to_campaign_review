<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylist;
use Auth;
use App\Customer;

class MylistController extends Controller
{
    public function store(Request $request)
    {
        $mylist = Mylist::find($request->mylist_id);
        $mylist->customers()->syncWithoutDetaching($request->customer_id);
        return back();
    }

    public function index()
    {
        $mylists = Mylist::all();
        return view('mylist.index', compact('mylists'));
    }
    public function create(Request $request)
    {
        $mylist = new Mylist();
        $mylist->name = $request->name;
        $mylist->save();
        return back();
    }

    public function delete($mylist)
    {
        $mylists = Mylist::find($mylist);
        $mylists->delete();
        return redirect()->route('mylist.index');
    }

    public function edit($mylist)
    {
        $mylist = Mylist::find($mylist);
        return view('mylist.edit', compact('mylist'));
    }

    public function update($mylist, Request $request)
    {
        $mylist = Mylist::find($mylist);
        $mylist->name = $request->name;
        $mylist->save();
        return back();
    }
}
