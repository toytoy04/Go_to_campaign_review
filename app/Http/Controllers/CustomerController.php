<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Customer;
use App\User;
use Auth;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function select()
    {
        return view('customer.select');
    }

    public function index()
    {
        return view('customer.index');
    }

    public function result(Request $request)
    {
        $query = Customer::query();

        if(!empty($request->name)){
            $query->where('name', 'like', '%'.$request->name.'%');
        }
        if(!empty($request->phone_number)){
            $query->where('phone_number', $request->phone_number);
        }

        $results = $query->select('id', 'name')->get();


        return view('customer.result', compact('results'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->user_id = Auth::id();
        $customer->fill($request->all());
        $customer->save();

        $regions = Region::all();

        return redirect()->route('travel.create', ['regions' => $regions, 'customer' => $customer]);
    }
}
