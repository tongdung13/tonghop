<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(5);
        $home = Home::all();
        return view('backend/customers/list', compact('customers', 'home'));
    }

    public function create()
    {
        $home = Home::all();
        return view('backend/customers/create', compact('home'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required'
        ]);

        $customer = new Customer();
        $customer->fill($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $customer->image = $path;
        }

        $customer->save();
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $home = Home::all();
        $customer = Customer::find($id);
        return view('backend/customers/edit', compact('customer', 'home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->fill($request->all());

        if ($request->hasFile('image')) {
            $currenImg = $request->file('image');
            if ($currenImg) {
                Storage::delete('/public/' . $currenImg);
            }

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $customer->image = $path;
        }

        $customer->save();
        return redirect()->route('customers.index');

    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('backend/customers/details', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if (! $search) {
            return redirect()->route('customers.index');
        }

        $customers = Customer::where('name', 'like', '%' . $search . '%')->paginate(5);

        $home = Home::all();
        Session::flash('search_result', true);
        return view('backend/customers/list', compact('customers', 'home'));
    }


}
