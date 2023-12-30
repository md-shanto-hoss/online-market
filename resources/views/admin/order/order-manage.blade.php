@extends('admin.master')

@section('title')
    Order Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center mb-2">All Order Information</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Order Id</th>
                            <th>Order Total</th>
                            <th>Customer Info</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($orders as $order)
                            <tr class="text-center">
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->order_total }}</td>
                                <td>{{ $order->customer->name.'('. $order->customer->mobile.')' }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_method == 1 ? 'Cash On Delivery': 'Online' }}</td>
                                <td>
                                    <a href="{{ route('admin.order.detail', ['id' => $order->id]) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{ route('admin.order.invoice', ['id' => $order->id]) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fa fa-file-invoice"></i>
                                    </a>
                                    <a href="{{ route('admin.invoice.download', ['id' => $order->id]) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="{{ route('admin.order.edit', ['id' => $order->id]) }}" class="btn btn-outline-success btn-sm {{ $order->order_status == 'Complete' ? 'disabled' : '' }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.order.delete', ['id' => $order->id]) }}" onclick=" return confirm('Are you sure to delete this?')" class="btn btn-outline-danger btn-sm {{ $order->order_status == 'Complete' || $order->order_status == 'Pending' || $order->order_status == 'Processing' ? 'disabled' : '' }}">
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
