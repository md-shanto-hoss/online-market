@extends('admin.master')

@section('title')
    Order Edit
@endsection

@section('body')
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-2">Order Edit Form</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>

                    <form action="{{ route('admin.order.update', ['id' => $order->id]) }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Order No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{ $order->id }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Order Status</label>
                            <div class="col-sm-9">
                                <select name="order_status" class="form-select">
                                    <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="Complete" {{ $order->status == 'Complete' ? 'selected' : '' }}>Complete</option>
                                    <option value="Cancel" {{ $order->status == 'Cancel' ? 'selected' : '' }}>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Delivery Address</label>
                            <div class="col-sm-9">
                                <textarea name="delivery_address" rows="5" class="form-control" placeholder="Delivery Address">{{ $order->delivery_address }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Order Total</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$order->order_total}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Payment Amount</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$order->order_total}}">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
