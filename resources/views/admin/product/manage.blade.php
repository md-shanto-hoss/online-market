@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center mb-2">All Product Information</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Stoke Amount</th>
                            <th>Selling Price</th>
                            <th>Short Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->stoke_amount }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>{{ $product->short_description }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" width="100" height="100" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}" onclick=" return confirm('Are you sure to delete this?')" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash"></i>
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
