<div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <a href="index.html">
                        <img src="{{asset('dashboard/template/assets/img/logo.png')}}" class="img-fluid logo" alt="">
                    </a>
                    <a href="index.html">
                        <img src="{{asset('dashboard/template/assets/img/logo-small.png')}}" class="img-fluid logo-small" alt="">
                    </a>
                </div>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">

                    <ul>
                        <li class="menu-title"><span>Doctor</span></li>
                        <li>
                            <a href="{{route('home')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                    </ul>
                    <ul>
                        <li class="menu-title"><span>Doctor</span></li>
                        <li>
                            <a href="{{route('adddoctor')}}"><i class="fe fe-users"></i> <span>Doctor</span></a>
                        </li>
                    </ul>
                    <ul>
                        <li class="menu-title"><span>Symptom</span></li>
                        <li>
                            <a href="{{route('disease_home')}}"><i class="fe fe-package"></i> <span>Disease</span></a>
                        </li>
                        <li>
                            <a href="{{route('addsymptoms')}}"><i class="fe fe-package"></i> <span>Symptom</span></a>
                        </li>
                    </ul>
                    <ul>
                        <li class="menu-title"><span>Patient</span></li>
                        <li>
                            <!-- <a href=""><i class="fe fe-users"></i> <span>Patient</span></a> -->
                        </li>
                    </ul>
                    <li>
                    <a href="{{route('prediction')}}"><i data-feather="home"></i> <span>Prediction</span></a>
                </li>



                </div>
            </div>
        </div>