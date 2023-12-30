@extends('website.master')

@section('title')
    Wishlist
@endsection

@section('body')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Wishlist</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive wishlist_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-stock-status">Stock Status</th>
                                    <th class="product-add-to-cart"></th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wishlists as $wishlist)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="{{ asset($wishlist->product->image) }}" width="100" height="100" alt="product1"></a></td>
                                        <td class="product-name" data-title="Product"><a href="#">{{ substr($wishlist->product->name, 0, 30). '...' }}</a></td>
                                        <td class="product-price" data-title="Price"> {{'Tk. '. $wishlist->product->selling_price }}</td>
                                        @if(!$wishlist->product->stoke_amount == 0)
                                            <td class="product-stock-status" data-title="Stock Status"><span class="badge badge-pill badge-success">In Stock</span></td>
                                        @else
                                            <td class="product-stock-status" data-title="Stock Status"><span class="badge badge-pill badge-danger">Out Stock</span></td>
                                        @endif
                                        <td class="product-add-to-cart">
                                            <form action="{{ route('cart.add', ['id' => $wishlist->product->id]) }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="quantity" />
                                                <button type="submit" class="btn btn-fill-out"><i class="icon-basket-loaded"></i> Add to Cart</button>
                                            </form>
                                        </td>
                                        <td class="product-remove" data-title="Remove"><a href="{{ route('wishlist.remove', ['id' => $wishlist->product->id]) }}"><i class="ti-close"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->
@endsection
