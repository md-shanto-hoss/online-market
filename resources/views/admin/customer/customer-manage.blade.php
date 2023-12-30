@extends('admin.master')

@section('title')
    Customer Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center mb-2">All Customer information</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($customers as $customer)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }} </td>
                                <td>{{ $customer->mobile }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <a href="{{ route('customer.detail', ['id' => $customer->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
