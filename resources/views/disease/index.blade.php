@extends('layouts.master')


@section('content')
<style>
._table {
    width: 100%;
    border-collapse: collapse;
}

._table th,
._table td {
    border: 1px solid #0002;
    padding: 8px 10px;
}

/* form field design start */
.form_control {
    border: 1px solid #0002;
    background-color: transparent;
    outline: none;
    padding: 8px 12px;
    width: 100%;
    color: #333;
    font-family: Arial, Helvetica, sans-serif;
    transition: 0.3s ease-in-out;
}

.form_control::placeholder {
    color: inherit;
    opacity: 0.5;
}

.form_control:is(:focus, :hover) {
    box-shadow: inset 0 1px 6px #0002;
}

/* form field design end */

.success {
    background-color: #24b96f !important;
}

.warning {
    background-color: #ebba33 !important;
}

.primary {
    background-color: #259dff !important;
}

.secondary {
    background-color: #00bcd4 !important;
}

.danger {
    background-color: #ff5722 !important;
}

.action_container {
    display: inline-flex;
}

.action_container>* {
    border: none;
    outline: none;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    padding: 8px 14px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.action_container>*+* {
    border-left: 1px solid #fff5;
}

.action_container>*:hover {
    filter: hue-rotate(-20deg) brightness(0.97);
    transform: scale(1.05);
    border-color: transparent;
    box-shadow: 0 2px 10px #0004;
    border-radius: 2px;
}

.action_container>*:active {
    transition: unset;
    transform: scale(.95);
}
</style>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="page-title" style="margin-top: 30px;">Disease <span style="color: blue">></span> List</h5>
                <div class="text-end">
                    <!-- <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add New User</a> -->
                    <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add Disease</a>
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
                    <h3 class="modal-title" id="modal">Disease</h3>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Add
                        Disease</button> -->
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('save_Disease') }}" id="saveCategories">
                        @csrf
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="disease" required>
                        </div>
                        <div class="form-group">
                        <table class="_table">
                                        <thead>
                                            <tr>
                                                <th>Symptom</th>
                                                <th width="50px">
                                                    <div class="action_container">
                                                        <button type="button" class="success" onclick="create_tr('table_body')">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body">
                                            <tr>
                                                <td>
                                                    <select name="symptoms_ids[]" class="form-control">
                                                        <option value="">Select Symptom</option>
                                                        @foreach ($symptoms as $symptom)
                                                        <option value="{{ $symptom->id }}">{{ $symptom->description }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="action_container">
                                                        <button class="danger" onclick="remove_tr('This')">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                @foreach ($diseases as $dis)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$dis->description}}</td>
                                    <td>
                                    <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$dis->id}}"> Edit</a>
                                               
                                               <a href="{{ route('delete_disease',$dis->id) }}" data-id="{{ $dis->id }}"
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
@section('scripts')
<script>
        function create_tr(table_id){
    let table_body = document.getElementById(table_id),
        first_tr = table_body.firstElementChild
        tr_clone = first_tr.cloneNode(true);
    table_body.append(tr_clone);
    clean_first_tr(table_body.firstElementChild);
}
function clean_first_tr(firstTr){
    let children = firstTr.children;
 
    children = Array.isArray(children) ? children : Object.values(children);
    children.forEach(x=>{
        // console.log(x, firstTr.lastElementChild);
        if(x !== firstTr.lastElementChild)
        {
        x.firstElementChild.value = '';
    }
    });
    // console.log(firstTr.children);
}
function remove_tr(This){
    if(This.closest('tbody').childElementCount == 1)
    {
        alert("You Don't have Permission to Delete This")
    }else{
        This.closest('tr').remove();
    }
}
    </script>
    @endsection