@extends('layouts.backend.admin')

@section('title', 'Home')

@section('content')

<hr>
<div class="container">
    <div class="form-gruop">
        <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required/>
                        {{-- @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                        @endif --}}
                    </div>
                    <div class="form-group">
                        <label for="name">Age</label>
                        <input type="number" name="age" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('age') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="number" name="phone" class="form-control" required/>
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Image</label><br>
                        <input type="file" name="image" class="form-control-file" required />
                        @if($errors->any())
                            <p class="alert alert-danger">{{ $errors->first('image') }}</p>
                        @endif
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-sm btn-outline-success">Add</button>
        </form>
    </div>

</div>



@endsection
