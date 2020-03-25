@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add New Customer</div>

                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            Name*: <input type="text" name='name' class="form-control" required />
                            Price*: <input type="text" name='price' class="form-control" required />
                            <br>
                            <input type="submit" value="Save Customer" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
