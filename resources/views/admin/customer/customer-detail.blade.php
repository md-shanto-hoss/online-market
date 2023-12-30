@extends('admin.master')

@section('title')
    Customer Detail
@endsection

@section('body')
    @extends('admin.master')

    @section('title')
        Customer Detail
    @endsection

    @section('body')
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <h2 class="text-center mb-2"> Customer information</h2>
                        <h4 class="text-center text-success">{{session('message')}}</h4>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <tr>
                                <th>Id</th>
                                <td>{{ $customer->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $customer->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $customer->mobile }}</td>
                            </tr>
                            <tr>
                                <th>NID</th>
                                <td>{{ $customer->nid }}</td>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <td>{{ $customer->dob }}</td>
                            </tr>
                            <tr>
                                <th>Blood Group</th>
                                <td>{{ $customer->blood_group }}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    @endsection

@endsection
