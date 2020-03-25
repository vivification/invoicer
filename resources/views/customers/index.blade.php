@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Customers</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('customers.create') }}" class="btn btn-primary">Add new customer</a>

                    <br><br>

                    <div class="table-responsive">
                        <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Postcode</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Email Address</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->postcode }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->state }}</td>
                            <td>{{ $customer->country->title }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td><a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-info">Edit Customer</a></td>
                            <td><a href="{{ route('invoices.create') }}?customer_id={{$customer->id}}" class="btn btn-sm btn-primary">New Quote</a></td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
