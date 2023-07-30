@extends('layouts.usermaster')


@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="page-title" style="margin-top: 30px;">Symptoms <span style="color: blue">></span> Prediction
                </h5>
                <br>
            </div>
        </div>
        <div class="row justify-content-lg-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-6 offset-3 pt-4">
                                <h3 class="text-center">Prediction</h3>

                                <form class="form" action="" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Symptom</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Symptom</option>
                                            @foreach ($symptoms as $symptom)
                                            <option value="{{ $symptom->id }}">{{ $symptom->description }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <!-- <button type="submit" class="btn btn-primary text-center">Submit</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection