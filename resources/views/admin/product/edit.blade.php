@extends('admin.master')
@section('title')
    Product Edit
@endsection

@section('body')
    <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Add Product Form</h2>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-select">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Sub Category Name</label>
                        <div class="col-sm-9">
                            <select name="sub_category_id" class="form-select">
                                <option value="">-- Select Sub Category --</option>
                                @foreach($subCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}" {{ $subCategory->id == $product->sub_category_id ? 'selected' : '' }}>{{ $subCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Unit Name</label>
                        <div class="col-sm-9">
                            <select name="unit_id" class="form-select">
                                <option value="">-- Select Unit --</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}" {{ $unit->id == $product->unit_id ? 'selected' : '' }}>{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Brand Name</label>
                        <div class="col-sm-9">
                            <select name="brand_id" class="form-select">
                                <option value="">-- Select Brand --</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Product Name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code" value="{{$product->code}}"  placeholder="Product Code"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Stoke Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" value="{{$product->stoke_amount}}" placeholder="Stoke Amount" name="stoke_amount"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="number" class="form-control" value="{{$product->regular_price}}" placeholder="Regular Price" name="regular_price"/>
                                <input type="number" class="form-control" value="{{$product->selling_price}}" placeholder="Selling Price" name="selling_price"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea name="short_description" rows="5" class="form-control" placeholder="Short Description">{{$product->short_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Long Description</label>
                        <div class="col-sm-9">
                            <textarea name="long_description" rows="5" class="form-control" placeholder="Long Description">{{$product->long_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file"/><br>
                            <img src="{{ asset($product->image) }}" width="250" height="220" alt="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Other Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="other_image[]" multiple class="form-control-file"/><br>
                            @foreach($product->otherImages as $image)
                            <img src="{{asset($image->image)}}" width="100" height="100" alt="">
                            @endforeach
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
@endsection
