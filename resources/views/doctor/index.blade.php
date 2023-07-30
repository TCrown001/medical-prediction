@extends('layouts.master')


@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="page-title" style="margin-top: 30px;">Doctor <span style="color: blue">></span> Add New</h5>
                <div class="text-end">
                    <!-- <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add New User</a> -->
                    <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add Doctor</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal">Doctor</h3>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Add
                        Doctor</button> -->
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('save_doctor') }}" id="saveCategories">
                        @csrf
                        <div class="form-group">
                            <label>first Name:</label>
                            <input type="text" class="form-control" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label>last Name:</label>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="phone" class="form-control" name="phone" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Marital Status:</label>
                            <select class="form-control" name="marital_status" id="">
                                <option value="">Signle</option>
                                <option value="">Maried</option>
                            </select>
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Occupation:</label>
                            <input type="text" class="form-control" name="occupation" required>
                        </div> -->
                        <div class="form-group">
                            <label>Sex:</label>
                            <select class="form-control" name="marital_status" id="">
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-header">
                    <h5 class="card-title"></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-stripped table-center table-hover datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!-- <th>Occupation</th> -->
                                    <th>Marital Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$doctor->firstName}}</td>
                                    <td>{{$doctor->lastName}}</td>
                                    <td>{{$doctor->email}}</td>
                                    <td>{{$doctor->phone}}</td>
                                    <!-- <td>{{$doctor->occupation}}</td> -->
                                    <td>{{$doctor->marital_status}}</td>
                                    <td>
                                                <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$doctor->id}}"> Edit</a>
                                               
                                                <a href="{{ route('deleteDoctor',$doctor->id) }}" data-id="{{ $doctor->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this Doctor?')"
                                                        class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                             
                                    </td>
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