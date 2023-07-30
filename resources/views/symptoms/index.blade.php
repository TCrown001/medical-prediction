@extends('layouts.master')


@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="page-title" style="margin-top: 30px;">Symptoms <span style="color: blue">></span> List</h5>
                <div class="text-end">
                    <!-- <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add New User</a> -->
                    <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add Symptoms</a>
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
                    <h3 class="modal-title" id="modal">Symptoms</h3>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Add
                        Symptoms</button> -->
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('save_symptoms') }}" id="saveCategories">
                        @csrf
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="description" required>
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
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($symptoms as $symptom)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$symptom->description}}</td>
                                    <td>
                                    <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$symptom->id}}"> Edit</a>
                                               
                                               <a href="{{ route('deleteSymptom',$symptom->id) }}" data-id="{{ $symptom->id }}"
                                                       onclick="return confirm('Are you sure you want to delete this Symptom?')"
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