<div class="header header-one">

<a href="javascript:void(0);" id="toggle_btn">
    <span class="toggle-bars">
        <span class="bar-icons"></span>
        <span class="bar-icons"></span>
        <span class="bar-icons"></span>
        <span class="bar-icons"></span>
    </span>
</a>


<div class="top-nav-search">
    <form>
        <input type="text" class="form-control" placeholder="Search here">
        <button class="btn" type="submit"><img src="{{asset('dashboard/template/assets/img/icons/search.svg')}}" alt="img"></button>
    </form>
</div>


<a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
</a>


<ul class="nav nav-tabs user-menu">



    <li class="nav-item dropdown">
        <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
            <span class="user-img">
                <img src="{{asset('dashboard/template/assets/img/profiles/avatar-07.jpg')}}" alt="img" class="profilesidebar">
                <span class="animate-circle"></span>
            </span>
            <span class="user-content">
                <span class="user-details">{{Auth::user()->name}}</span>
            </span>
        </a>
        <div class="dropdown-menu menu-drop-user">
            <div class="profilemenu">
                <div class="subscription-logout">
                    <ul>
                        <li class="pb-0">
                            <a class="dropdown-item" href="/logout">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>

</ul>

</div>