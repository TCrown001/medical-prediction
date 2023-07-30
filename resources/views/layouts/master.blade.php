<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Medical Health Prediction</title>

    <link rel="shortcut icon" href="{{asset('dashboard/template/assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('dashboard/template/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/template/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/template/assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/template/assets/plugins/feather/feather.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/template/assets/css/bootstrap-datetimepicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/template/assets/plugins/datatables/datatables.min.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/template/assets/css/style.css')}}">
</head>

<body>

    <div class="main-wrapper">

    @include('layouts.header')
    @include('layouts.sidebar') 


        <div class="page-wrapper">
             @yield('content')
        </div>

    </div>


    @yield('scripts')
    @include('layouts.scripts')
    
</body>

</html>