<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::paginate(5);
        $customer = Customer::all();
        return view('backend/homes/list', compact('homes', 'customer'));
    }

    public function create()
    {
        $customer = Customer::all();
        return view('backend/homes/create', compact('customer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'houseName' => 'required',
            'kindsOfHouse' => 'required',
            'rentingPrice' => 'required',
            'address' => 'required',
            'rentalDate' => 'required',
            'homeReturnDate' => 'required',
            'homeInfomation' => 'required',
            'image' => 'required',
            'status' => 'required',
            'customer_id' => 'required'
        ]);

        $home = new Home();
        $home->fill($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $home->image = $path;
        }

        $home->save();
        return redirect()->route('homes.index');
    }

    public function edit($id)
    {
        $customer = Customer::all();
        $home = Home::find($id);
        return view('backend/homes/edit', compact('customer', 'home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'houseName' => 'required',
            'kindsOfHouse' => 'required',
            'rentingPrice' => 'required',
            'address' => 'required',
            'rentalDate' => 'required',
            'homeReturnDate' => 'required',
            'homeInfomation' => 'required',
            'image' => 'required',
            'customer_id' => 'required'
        ]);

        $home = Home::find($id);
        $home->fill($request->all());

        if ($request->hasFile('image')) {
            $currenImg = $request->file('image');
            if ($currenImg) {
                Storage::delete('/public/' . $currenImg);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $home->image = $path;
        }

        $home->save();
        return redirect()->route('homes.index');
    }

    public function show($id)
    {
        $home = Home::find($id);
        return view('backend/homes/details', compact('home'));
    }

    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();
        return redirect()->route('homes.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (! $search) {
            return redirect()->route('homes.index');
        }

        $homes = Home::where('houseName', 'kindsOfHouse', 'rentingPrice', 'address', 'rantalDate', 'homeReturnDate', 'homeInfomation' ,'like', '%' . $search . '%')->simplePaginate(15);
        $customer = Customer::all();
        return view('backend/homes/list', compact('homes', 'customer'));
    }
}
