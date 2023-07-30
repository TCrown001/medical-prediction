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
                                    <div class="repeater">
                                        <div class="repeater-item">
                                            <select name="data[]">
                                                <option value="option1">Option 1</option>
                                                <option value="option2">Option 2</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <!-- Add more select fields or other form elements here -->
                                            <button class="remove-item">Remove</button>
                                        </div>
                                    </div>

                                    <button class="add-item">Add More</button>
                                    <button type="submit">Submit</button>

                                    <div class="btn btn-success">
                                        <h5 style="color:white;">Result</h5>
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
        // Function to fetch records from Laravel controller
        function fetchRecordsFromController() {
            $.ajax({
                url: '/fetch-records', // Replace with the correct URL for your Laravel route
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Process the fetched data here (e.g., update your UI with the records)
                    console.log(data); // Output the data to the console for demonstration
                },
                error: function(xhr, status, error) {
                    console.error(error); // Log any errors to the console
                }
            });
        }

        // Function to send data to Laravel controller
        function sendDataToController(formData) {
            $.ajax({
                url: '/submit-data', // Replace with the correct URL for your Laravel route to handle the form submission
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // Process the response from the controller if needed
                    console.log(response); // Output the response to the console for demonstration
                },
                error: function(xhr, status, error) {
                    console.error(error); // Log any errors to the console
                }
            });
        }

        // Add item to the repeater
        $('.add-item').click(function() {
            var newItem =
                '<div class="repeater-item"><select name="data[]"><option value="option1">Option 1</option><option value="option2">Option 2</option></select><button class="remove-item">Remove</button></div>';
            $('.repeater').append(newItem);
        });

        // Remove item from the repeater
        $(document).on('click', '.remove-item', function() {
            $(this).parent('.repeater-item').remove();
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
            // For example, you can fetch additional data based on the selected value
        });

        // Fetch records when the document is ready
        fetchRecordsFromController();
    });
    </script>

    @endsection