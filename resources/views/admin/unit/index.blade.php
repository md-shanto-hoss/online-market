@extends('admin.master')
@section('title')
    Unit Add
@endsection

@section('body')
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Add Unit Form</h2>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form action="{{ route('unit.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name"  placeholder="Unit Name">
                            <span class="text-center text-danger">
                                {{ $errors->has('name') ? $errors->first('name') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" rows="5" class="form-control" placeholder="Description"></textarea>
                            <span class="text-center text-danger">
                                {{ $errors->has('description') ? $errors->first('description') : '' }}
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
