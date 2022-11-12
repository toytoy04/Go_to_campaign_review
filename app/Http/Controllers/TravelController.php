<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Travel;
use App\Customer;
use App\User;
use App\Budget;
use App\Memo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use App\Http\Requests\TravelRequest;
use App\Http\Requests\UpdateRequest;

class TravelController extends Controller
{
    public function edit(Int $travel)
    {
        $regions = Region::all();

        $travel = Travel::find($travel);

        return view('travels.edit', ['regions' => $regions, 'travel' => $travel]);
    }

    public function update(UpdateRequest $request, Int $travel)
    {
        Travel::where('id', $travel)
            ->update([
                'name' => $request->name,
                'departure_date' => $request->departure_date,
                'day'  => $request->day,
                'people' => $request->people,
                'region_id' => $request->region_id,
                'cost' => $request->cost,
                'subsidy' => $request->subsidy,
                'coupon' => $request->coupon,
            ]);

        Customer::where('id', $travel)
            ->update([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'covid_document' => $request->covid_document,
            ]);

        return redirect()->route('travel.show', ['travel' => $travel]);
    }

    public function show($travel)
    {
        $travel = Travel::find($travel);

        return view('travels.show', compact('travel'));
    }

    public function delete(Int $travel)
    {
        Travel::find($travel)->delete();
        return redirect()->route('travel.index');
    }

    public function create($customer)
    {
        $regions = Region::all();

        $customer = Customer::find($customer);

        return view('travels.create', ['regions' => $regions, 'customer' => $customer]);
    }

    public function store(TravelRequest $request)
    {
        $travel = new Travel();

        $travel->fill($request->all())->save();

        return redirect()->route('travel.index');
    }

    public function search()
    {
        $regions = Region::all();
        $users = User::all();

        return view('travels.search', compact('regions', 'users'));
    }

    public function results(Request $request)
    {
        $query = Travel::query();

        $query
            ->join('customers', 'travel.customer_id', '=', 'customers.id')->join('users', 'customers.user_id', '=', 'users.id');

        if (!empty($request->input('application_start'))) {
            $query->whereDate('application_date', '>=', $request->application_start);
        }
        if (!empty($request->application_end)) {
            $query->whereDate('application_date', '<=', $request->application_end);
        }
        if (!empty($request->departure_start)) {
            $query->whereDate('departure_date', '>=', $request->departure_start);
        }
        if (!empty($request->departure_end)) {
            $query->whereDate('departure_date', '<=', $request->departure_end);
        }
        if (!empty($request->region_id)) {
            $query->where('region_id', $request->region_id);
        }
        if (!empty($request->cost_start)) {
            $query->where('cost', '>=', $request->cost_start);
        }
        if (!empty($request->cost_end)) {
            $query->where('cost', '<=', $request->cost_end);
        }
        if (!empty($request->user_id)) {
            $query->where('user_id', $request->user_id);
        }
        if (!empty($request->customer_id)) {
            $query->where('customer_id', $request->customer_id);
        }
        if (!empty($request->name)) {
            $query->where('customers.name', 'like', '%' . $request->name . '%');
        }
        if (!empty($request->phone_number)) {
            $query->where('phone_number', $request->phone_number);
        }
        if (!empty($request->covid_document)) {
            $query->where('covid_document', $request->covid_document);
        }

        $results = $query->select('travel.id', 'travel.departure_date', 'customers.name')->get();

        $prefecture = Region::where('id', $request->region_id)->select('name')->first();

        return view('travels.result', compact('results', 'request', 'prefecture'));
    }

    public function summary()
    {
        $budget = Budget::sum('amount');

        $today = Carbon::today();
        $totalSubsidy = Travel::whereDate('application_date', '<=', $today)
            ->whereDate('departure_date', '>=', $today)
            ->sum('subsidy');

        $allPercentage = floor($totalSubsidy / $budget * 100) . "％";

        $application = Travel::whereHas('customer', function (Builder $query) {
            $query->where('user_id', Auth::id());
        })->value('subsidy');

        $shopPercentage = floor($application / $totalSubsidy * 100) . "％";

        $ranking = Region::withCount('travels')
            ->orderBy('travels_count', 'desc')
            ->limit(10)
            ->get();

        return view('travels.summary', compact('budget', 'totalSubsidy', 'allPercentage', 'application', 'shopPercentage', 'ranking'));
    }

    public function index()
    {
        $travels = Travel::orderBy('departure_date', 'desc')
            ->get();

        return view('travels.index', compact('travels'));
    }

    public function memo(Travel $travel)
    {

        return view('travels.memo', compact('travel'));
    }

    public function memoStore(Request  $request, Int $travel)
    {
        $memo = new Memo();
        $memo->travel_id = $travel;
        $memo->user_id = Auth::user()->id;
        $memo->fill($request->all())->save();

        return redirect()->route('travel.memo', ['travel' => $memo->travel_id]);
    }

    public function searchPeriod()
    {
        $date = Carbon::now();
        $this_month = $date->month;
        $last_month = $date->subMonth()->month;
        $month_before_last = $date->subMonth(1)->month;

        $month_before_last_travels = Travel::whereYear('application_date', $date->year)
            ->whereMonth('application_date', $month_before_last)
            ->get();

        $last_month_travels = Travel::whereYear('application_date', $date->year)
            ->whereMonth('application_date', $last_month)
            ->get();

        $this_month_travels = Travel::whereYear('application_date', $date->year)
            ->whereMonth('application_date', $this_month)
            ->get();

        return view('travels.searchPeriod', compact('date', 'this_month', 'last_month', 'month_before_last', 'month_before_last_travels', 'last_month_travels', 'this_month_travels'));
    }
}
