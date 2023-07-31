@extends('layouts.master')


@section('content')

<div class="content container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-header">
                    <h5 class="card-title">List of Registered Users</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-stripped table-center table-hover datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->usertype}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <!--  -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection