@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    <a href="{{ route('invoices.create') }}" class="btn btn-primary">Add new invoice</a>--}}

                    <br><br>

                    <div class="table-responsive">
                        <table class="table">
                        <tr>
                        <th>Quote Date</th>
                        <th>Quote Number</th>
                        <th>Customer</th>
                            <th>Total Amount</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->invoice_date }}</td>
                            <td>{{ $invoice->invoice_number }}</td>
                            <td>{{ $invoice->customer->name }}</td>
                            <td>{{ number_format($invoice->total_amount, 2) }}</td>
                            <td><a href="{{ route('invoices.show', $invoice->id) }}" class="btn btn-primary">View Quote</a></td>
                            <td><a href="{{ route('invoices.download', $invoice->id) }}" class="btn btn-primary">View PDF</a></td>
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
