@extends('layouts/backend/admin')

@section('title', 'Home')

@section('content')
<hr>

    <div class="container">
                <form action="{{ route('customers.search') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="search" name="search" placeholder="search" style="height: 30px; margin-left: 740px"/>
                    <button type="submit" class="btn btn-sm btn-outline-primary">Search
                    </button>
                </form>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Number Of rented houses</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach($customers as $key => $customer)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            <a href="{{ route('customers.show', $customer->id) }}"> {{ $customer->name }} </a></td>
                        <td>{{ $customer->age }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <img src="{{ url('storage/'. $customer->image) }}" style="width: 100px; height: 100px">
                        </td>
                        <td>{{ count($customer->home) }}</td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-outline-success">Update</a>
                            <a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Do you may want to delete ?')">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="col-12 pagination" style="font-size:20px; width:30px; height:100px; text-align: right!important;">
        {{ $customers->links("pagination::bootstrap-4") }}
        </div>
    </div>



@endsection


