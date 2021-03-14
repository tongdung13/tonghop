@extends('layouts/backend/admin')

@section('title', 'Home')

@section('content')

<hr>
<div class="container">
    <form method="POST" action="{{ route('homes.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>House Name</label>
                    <input type="text" name="houseName" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Kinds Of House</label>
                    <input type="text" name="kindsOfHouse" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Renting Price</label>
                    <input type="number" name="rentingPrice" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Rental Date</label>
                    <input type="date" name="rentalDate" class="form-control" required />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>House Return Date</label>
                    <input type="date" name="homeReturnDate" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>House Infomation</label>
                    <textarea name="homeInfomation" class="form-control" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label>Image</label><br>
                    <input type="file" name="image" class="form-control-file" required />
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                            <option value="Have Been Leased">Have Been Leased</option>
                            <option value="Not Yet Lease">Not Yet Lease</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Customer Name</label>
                    <select name="customer_id" class="form-control">
                        @foreach($customer as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>

        </div><br>
        <input type="submit" class="btn btn-sm btn-outline-success" value="Add">
    </form>
</div>


@endsection
