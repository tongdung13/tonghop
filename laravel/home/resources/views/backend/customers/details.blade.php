@extends('layouts/backend/admin')

@section('title', 'Home')

@section('content')

<nav class="navbar navbar-dark bg-dark">
    <div>
        <a href="{{ route('customers.index') }}}" class="btn btn-sm btn-outline-primary">Customer</a>
        <a href="{{ route('customers.create') }}" class="btn btn-sm btn-outline-primary">Add</a>
    </div>
  </nav>
<hr>

    <div class="container">
        <div>
            <label for="name"><b>Name: </b></label>  {{ $customer->name }}
        </div>
        <div>
            <label for="age"><b>Age: </b></label>  {{ $customer->age }}
        </div>
        <div>
            <label for="age"><b>Address: </b></label>  {{ $customer->address }}
        </div>
        <div>
            <label for="age"><b>Phone: </b></label>  {{ $customer->phone }}
        </div>
        <div>
            <label for="age"><b>Image: </b></label> <img src="{{ url('storage/' . $customer->image)  }}" style="width: 100px; height:100px">
        </div>
    </div>



@endsection
