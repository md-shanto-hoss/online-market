@extends('admin.master')
@section('title')
     User Edit
@endsection

@section('body')
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Edit User Form</h2>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="{{ $user->name }}" name="name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" readonly value="{{ $user->email }}" name="email" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> User Type</label>
                        <div class="col-sm-9">
                            <select name="user_type" class="form-select">
                                <option value="">-- Select User --</option>
                                <option value="1" {{ $user->user_type == 1 ? 'selected' : '' }}>Super Admin</option>
                                <option value="2" {{ $user->user_type == 2 ? 'selected' : '' }}>Admin</option>
                                <option value="3" {{ $user->user_type ==3 ? 'selected' : '' }}>Executive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update User</button>
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
