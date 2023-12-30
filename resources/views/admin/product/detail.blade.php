@extends('admin.master')

@section('title')
    Product Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-2">Product Detail Information</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                            <th>Product Id.</th>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                            <th>Sub Category Name</th>
                            <td>{{ $product->subCategory->name }}</td>
                        </tr>
                        <tr>
                            <th>Unit Name</th>
                            <td>{{ $product->unit->name }}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{ $product->brand->name }}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <td>{{ $product->code }}</td>
                        </tr>
                        <tr>
                            <th>Stoke Amount</th>
                            <td>{{ $product->stoke_amount }}</td>
                        </tr>
                        <tr>
                            <th>Regular Price</th>
                            <td>{{ $product->regular_price }}</td>
                        </tr>
                        <tr>
                            <th>Selling Price</th>
                            <td>{{ $product->selling_price }}</td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{ $product->short_description }}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{{ $product->long_description }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{ asset($product->image) }}" width="250" height="220" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Other Image</th>
                            <td>
                                @foreach($product->otherImages as $image)
                                <img src="{{ asset($image->image) }}" width="100" height="100" alt="">
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
