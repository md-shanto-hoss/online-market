@extends('admin.master')
@section('title')
    Product Add
@endsection

@section('body')
    <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Add Product Form</h2>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-select">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-center text-danger">
                                {{ $errors->has('category_id') ? $errors->first('category_id') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Sub Category Name</label>
                        <div class="col-sm-9">
                            <select name="sub_category_id" class="form-select">
                                <option value="">-- Select Sub Category --</option>
                                @foreach($subCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-center text-danger">
                                {{ $errors->has('sub_category_id') ? $errors->first('sub_category_id') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Unit Name</label>
                        <div class="col-sm-9">
                            <select name="unit_id" class="form-select">
                                <option value="">-- Select Unit --</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-center text-danger">
                                {{ $errors->has('unit_id') ? $errors->first('unit_id') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Brand Name</label>
                        <div class="col-sm-9">
                            <select name="brand_id" class="form-select">
                                <option value="">-- Select Brand --</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-center text-danger">
                                {{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name"  placeholder="Product Name">
                            <span class="text-center text-danger">
                                {{ $errors->has('name') ? $errors->first('name') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code"  placeholder="Product Code">
                            <span class="text-center text-danger">
                                {{ $errors->has('code') ? $errors->first('code') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Stoke Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Stoke Amount" name="stoke_amount"/>
                            <span class="text-center text-danger">
                                {{ $errors->has('stoke_amount') ? $errors->first('stoke_amount') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                           <div class="input-group">
                               <input type="number" class="form-control" placeholder="Regular Price" name="regular_price"/>
                               <input type="number" class="form-control" placeholder="Selling Price" name="selling_price"/>
                               <div class="input-group">
                                   <span class="text-center text-danger">
                                   {{ $errors->has('regular_price') ? $errors->first('regular_price') : '' }}
                               </span>
                                   <span class="text-center text-danger ms-5">
                                   {{ $errors->has('selling_price') ? $errors->first('selling_price') : '' }}
                               </span>
                               </div>
                           </div>

                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea name="short_description" rows="5" class="form-control" placeholder="Short Description"></textarea>
                            <span class="text-center text-danger">
                                {{ $errors->has('short_description') ? $errors->first('short_description') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Long Description</label>
                        <div class="col-sm-9">
                            <textarea name="long_description" rows="5" class="form-control" placeholder="Long Description"></textarea>
                            <span class="text-center text-danger">
                                {{ $errors->has('long_description') ? $errors->first('long_description') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file"/><br>
                            <span class="text-center text-danger">
                                {{ $errors->has('image') ? $errors->first('image') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Other Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="other_image[]" multiple class="form-control-file"/><br>
                            <span class="text-center text-danger">
                                {{ $errors->has('other_image') ? $errors->first('other_image') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Create</button>
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
