@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('products.create') }}" class="btn btn-primary">Add new products</a>

                        <br><br>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
{{--                                        <td><a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-info">Edit Customer</a></td>--}}
                                    </tr>
                                @empty
                                        <tr>
                                            <td colspan="2">No Products Found</td>
                                        </tr>
                                    @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
