<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="#">
                <img src="{{asset('landingpage/images/kp-logo.jpg')}}" class="img-fluid logo" alt=""> Health Prediction
            </a>
            <a href="#">
                <img src="{{asset('landingpage/images/kp-logo.jpg')}}" class="img-fluid logo-small"
                    alt="">
            </a>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="submenu">
                    <a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span> Dashboard</span></a>
                </li>

            </ul>

            <ul>
                <li>
                    <a href="{{route('prediction')}}"><i class="fe fe-home"></i> <span>Prediction</span></a>
                </li>
            </ul>
            

        </div>
    </div>
</div>