@extends('admin.master')
@section('title')
    Add User
@endsection

@section('body')
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Add User Form</h2>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form action="{{ route('user.create') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name"  placeholder=" Name">
                            <span class="text-center text-danger">
                                {{ $errors->has('name') ? $errors->first('name') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email"  placeholder=" Email">
                            <span class="text-center text-danger">
                                {{ $errors->has('email') ? $errors->first('email') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> User Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password"  placeholder=" User Password">
                            <span class="text-center text-danger">
                                {{ $errors->has('password') ? $errors->first('password') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> User Type</label>
                        <div class="col-sm-9">
                            <select name="user_type" class="form-select">
                                <option value="">-- Select User --</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Executive</option>
                            </select>
                            <span class="text-center text-danger">
                                {{ $errors->has('user_type') ? $errors->first('user_type') : '' }}
                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Create New User</button>
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
