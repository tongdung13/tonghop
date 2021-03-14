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
    <div class="form-gruop">
        <form method="POST" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $customer->name }}" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Age</label>
                        <input type="number" name="age" value="{{ $customer->age }}" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('age') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="address" value="{{ $customer->address }}" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="number" name="phone" value="{{ $customer->phone }}" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Image</label><br>
                        <input type="file" name="image" class="form-control-file" required />
                        <div><br>
                            <img src="{{ url('storage/'. $customer->image) }}" style="width: 100px; height: 100px" />
                        </div>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('image') }}</p>
                        @endif
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
        </form>
    </div>


@endsection
