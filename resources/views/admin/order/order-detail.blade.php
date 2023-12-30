@extends('admin.master')

@section('title')
    Order Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-2">Order Basic Information</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                           <th>Order Id.</th>
                           <td>{{ $order->id }}</td>
                       </tr>
                        <tr>
                           <th>Order Total</th>
                           <td>{{ $order->order_total }}</td>
                       </tr>
                        <tr>
                           <th>Tax Total</th>
                           <td>{{ $order->tax_total }}</td>
                       </tr>
                        <tr>
                           <th>Shipping Total</th>
                           <td>{{ $order->shipping_total }}</td>
                       </tr>
                        <tr>
                            <th>Order Date</th>
                            <td>{{ $order->order_date }}</td>
                        </tr>
                        <tr>
                            <th>Order Status</th>
                            <td>{{ $order->order_status }}</td>
                        </tr>
                        <tr>
                           <th>Delivery Address</th>
                           <td>{{ $order->delivery_address }}</td>
                       </tr>
                        <tr>
                           <th>Delivery Status</th>
                           <td>{{ $order->order_status }}</td>
                       </tr>
                        <tr>
                           <th>Payment Type</th>
                           <td>{{ $order->payment_method == 1 ? 'Cash On Delivery': '' }}</td>
                       </tr>
                        <tr>
                           <th>Payment Status</th>
                           <td>{{ $order->payment_status }}</td>
                       </tr>
                        <tr>
                           <th>Customer Name</th>
                           <td>{{ $order->customer->name }}</td>
                       </tr>
                        <tr>
                           <th>Customer Mobile</th>
                           <td>{{ $order->customer->mobile }}</td>
                       </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-2">Order Basic Information</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                       <thead>
                       <tr>
                           <th>Sl.</th>
                           <th>Product Id</th>
                           <th>Product Name</th>
                           <th>Product Price</th>
                           <th>Product Quantity</th>
                           <th>Total Price</th>
                       </tr>
                       </thead>
                        <tbody>
                        @foreach($order->orderDetails as $orderDetail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $orderDetail->product_id }}</td>
                            <td>{{ $orderDetail->product_name }}</td>
                            <td>{{ $orderDetail->product_price }}</td>
                            <td>{{ $orderDetail->product_quantity }}</td>
                            <td>{{ $orderDetail->product_quantity * $orderDetail->product_price }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
