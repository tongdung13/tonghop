@extends('layouts/backend/admin')

@section('title', 'Home')

@section('content')
<hr>
    <div class="container">

                <form action="{{ route('homes.search') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="search" name="search" placeholder="search" style="height: 30px; margin-left: 740px" />
                    <button type="submit" class="btn btn-sm btn-outline-primary">Search
                    </button>
                </form>

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>House Name</th>
                    <th>Kinds of house</th>
                    <th>Renting Price</th>
                    <th>Address</th>
                    <th>Rental Date</th>
                    <th>House return Date</th>
                    <th>House Infomation</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($homes as $key => $home)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $home->houseName }}</td>
                        <td>{{ $home->kindsOfHouse }}</td>
                        <td>{{ number_format($home->rentingPrice, 2) }}</td>
                        <td>{{ $home->address }}</td>
                        <td>{{ $home->rentalDate }}</td>
                        <td>{{ $home->homeReturnDate }}</td>
                        <td>{{ $home->homeInfomation }}</td>
                        <td>
                            <img src="{{ 'storage/' . $home->image }}" style="width: 100px; height:100px">
                        </td>
                        <td>{{ $home->status }}</td>
                        <td>
                            <a href="{{ route('homes.edit', $home->id) }}" class="btn btn-sm btn-outline-warning">Update</a>
                            <a href="{{ route('homes.destroy', $home->id) }}" class="btn btn-sm btn-outline-danger" style="margin-left: 4px" onclick="return confirm('Do you may want to delete ?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-12 pagination" style="font-size:20px; width:30px; height:100px; text-align: right!important;">
            {{ $homes->links("pagination::bootstrap-4") }}
            </div>
    </div>


@endsection
