<div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <a href="#">
                        <img src="{{asset('landingpage/images/kp-logo.jpg')}}" class="img-fluid logo" alt="">Medical Prediction
                    </a>
                    <a href="#">
                        <img src="{{asset('landingpage/images/kp-logo.jpg')}}" class="img-fluid logo-small" alt="">
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
                        <li class="menu-title"><span>Patient</span></li>
                        <li>
                            <a href="{{route('patient')}}"><i class="fe fe-users"></i> <span>Patient</span></a>
                        </li>
                    </ul>
                    <ul>
                        <li class="menu-title"><span>Symptom</span></li>
                        <li>
                            <a href="{{route('addsymptoms')}}"><i class="fe fe-package"></i> <span>Symptom</span></a>
                        </li>
                        <li>
                            <a href="{{route('disease_home')}}"><i class="fe fe-package"></i> <span>Disease</span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>