@extends('admin.master')
@section('title')
    Category Update
@endsection

@section('body')
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3"> Category Update Form</h2>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form action="{{ route('unit.update',['id' => $unit->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{ $unit->name }}"  placeholder="Category Name">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" rows="5" class="form-control" placeholder="Description">{{ $unit->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file"/><br>
                            <img src="{{ asset($unit->image) }}" width="150" height="120" alt="">
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
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
@endsection
