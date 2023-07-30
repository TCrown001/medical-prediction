@extends('layouts.usermaster')

@section('content')
<style>
.repeater {
    margin-bottom: 20px;
}

.repeater-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.repeater-item select {
    flex: 1;
    padding: 5px;
}

.repeater-item button {
    margin-left: 10px;
    background-color: #f44336;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.add-item {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

/* Optional: Style submit button */
[type="submit"] {
    background-color: #2196F3;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}
</style>


<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="page-title" style="margin-top: 30px;">Medical <span style="color: blue">></span> Prediction
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
                                <h3 class="text-center">Prediction</h3><br>
                                <div class="container">
                                    <form id="formRecord">
                                    @csrf
                                    <div class="repeater">
                                        <div class="repeater-item">
                                            <select name="data[]">
                                                <option value="">Select Symptom</option>
                                                @foreach($symptoms as $sym)
                                                <option value="{{$sym->id}}">{{$sym->description}}</option>
                                                <!-- Add more options as needed -->
                                                @endforeach

                                            </select>
                                            <!-- Add more select fields or other form elements here -->
                                            <button class="remove-item">Remove</button>
                                        </div>
                                    </div>

                                    <button type="button" class="add-item">Add More</button>
                                    <button type="submit">Submit</button>
                                    </form>
                                    <h5 style="color:white;">Result</h5>
                                    <div class="btn btn-success">
                                        <p style="color: white; font-size: 20">The predicted disease is: 
                                    <span id="diseasePredicted"  style="color: red"></span>
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script>
    $(document).ready(function() {
        // Function to fetch records from L
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        function fetchRecordsFromController(formData) {
            $.ajax({
                url: '/prediction/fetch-predicted-diseases',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {                    
                    // console.log(response);
                    var responseData = response.data;
                    $("#diseasePredicted").text(responseData.description);
                },
                error: function(xhr, status, error) {
                    console.error(error); 
                    alert(error);
                }
            });
        }

        // Add item to the repeater
        $('.add-item').click(function() {
            var newItem =
                `<div class="repeater-item"><select name="data[]">      
                                              <option value="">Select Symptom</option>
                                                @foreach($symptoms as $sym)
                                                <option value="{{$sym->id}}">{{$sym->description}}</option>                                            
                                                @endforeach
                                                </select>
                                                <button class="remove-item">Remove</button></div>`;
            $('.repeater').append(newItem);
        });

        // Remove item from the repeater
        $(document).on('click', '.remove-item', function() {
            $(this).parent('.repeater-item').remove();
            var formData = $("#formRecord").serializeArray();
            // sendDataToController(formData);
            fetchRecordsFromController(formData);
        });

        // Form submission
        $('#recordForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serializeArray();
            sendDataToController(formData);
        });

        // Bind change event to select elements
        $(document).on('change', '.repeater-item select', function() {
            // Handle the change event here, if needed
            // console.log('here');
            var formData = $("#formRecord").serializeArray();
            // sendDataToController(formData);
            fetchRecordsFromController(formData);
        });

        // Fetch records when the document is ready
        // fetchRecordsFromController();
    });
    </script>

    @endsection