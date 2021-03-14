<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        
        return response()->json($customer);
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return response()->json($customer);
    }

    public function edit(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->fill($request->all());
        $customer->save();
        return response()->json($customer);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json($customer);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

}
