@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center mb-2">All Category Info</h2>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($units as $unit)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $unit->name }}</td>
                                <td>{{ $unit->description }}</td>
                                <td>
                                    <img src="{{ asset($unit->image) }}" width="100" height="100" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('unit.edit', ['id' => $unit->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('unit.delete', ['id' => $unit->id]) }}" class="btn btn-outline-danger btn-sm">
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
