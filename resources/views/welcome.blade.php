<!DOCTYPE html>

<html lang="en">

<head>
  <!-- page title-->
  <title>Medical Health Prediction</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Health Care, health" />
  <meta name="description" content="Health Care HTML Template" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--start theme style -->
  <link rel="stylesheet" href="{{asset('landingpage/css/animate.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap.min.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/font-awesome.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/fonts.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/owl.carousel.min.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/owl.theme.default.min.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/jquery.bxslider.css')}}" media="screen" />
  <link rel="stylesheet" href="{{asset('landingpage/css/style.css')}}" media="screen" />
  <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
  <!-- favicon links -->
  <link rel="shortcut icon" type="image/png" href="favicon.ico">

  <script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js')}}', 'ga');

    ga('create', 'UA-35935151-8', 'auto');
    ga('send', 'pageview');

  </script>
</head>

<body>
  <!--Pre loader start-->
  <div id="preloader">
	<div class="loading">
		<svg version="1.2" height="300" width="600" xmlns="http://www.w3.org/2000/svg"
			viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">
			<path id="pulsar" stroke="rgba(0,155,155,1)" fill="none" stroke-width="2"stroke-linejoin="round" d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" />
		</svg>
	</div>
</div>
  <!-- color picker start -->
  <div id="style-switcher" class="hs_color_set">
    <div>
      <h3>color options</h3>
      <ul class="colors">
        <li>
          <p class='colorchange' id='color'></p>
        </li>
        <li>
          <p class='colorchange' id='color2'></p>
        </li>
        <li>
          <p class='colorchange' id='color3'></p>
        </li>
        <li>
          <p class='colorchange' id='color4'></p>
        </li>
        <li>
          <p class='colorchange' id='color5'></p>
        </li>
        <li>
          <p class='colorchange' id='style'></p>
        </li>
      </ul>
      <h3>Theme Option</h3>
      <select class="rock_themeoption" onchange="location = this.options[this.selectedIndex].value;">
        <option>Select Option</option>
        <option value="one_page.html">Single Page</option>
        <option value="index.html">Multi Pages</option>
      </select>
    </div>
    <!-- <div class="bottom"> <a href="#" class="settings"><i class="fa fa-gear"></i></a> </div> -->
  </div>
  <!-- color picker end -->
  <!--header start-->
  <div class="hlc_topheader">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="hlc_topheader_textleft">
            <p><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Opening Hours: 6.00 am - 11.00 pm (Mon - Sat)
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="hlc_topheader_textright">
            <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Question? Call Us at +(0321) 752 8659</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header id="hs_header">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div id="hs_logo"> <a href="index.html"> <img src="{{asset('landingpage/images/kp-logo.jpg')}}" alt="" style="width: 70px; height: 65px; border-radius:30px"> <b style="color: white;">Medical Health Prediction </b></a> </div>
          <!-- #logo -->
        </div>
        <div class="col-lg-6 col-md-9 col-sm-12">
          <button type="button" class="hs_nav_toggle navbar-toggle" data-bs-toggle="collapse"
            data-bs-target="#bs-example-navbar-collapse-1">Menu<i class="fa fa-bars"></i> <i class="fa fa-times" aria-hidden="true"></i></button>
          <nav>
            <ul class="hs_menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <li><a class="active">Home</a>
              </li>
              <!-- <li><a href="about.html">about</a></li>
              <li><a>services</a>
                <ul>
                  <li><a href="services.html">Pediatric Clinic</a></li>
                  <li><a href="services.html">Dental Clinic</a></li>
                  <li><a href="services.html">General Surgery</a></li>
                  <li><a href="services.html">Physiotherapy</a></li>
                  <li><a href="services.html">Pregnancy Care</a></li>
                </ul>
              </li> -->
              <li><a href="contact.html">Contact</a></li>
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12">
          <div class="hs_social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" id="hs_search"><i class="fa fa-search"></i></a></li>
            </ul>
          </div>
          <div class="hs_search_box">
            <form class="form-inline" role="form">
              <div class="form-group has-success has-feedback">
                <input type="text" class="form-control" id="inputSuccess4" placeholder="Search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--slider start-->
  <div class="health_slider">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="hlc_slider_details">
          <img class="animated fadeInDown" src="{{asset('landingpage/images/slider/slider1.jpg')}}" alt="...">
          <div class="hlc_slider_details_text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h1 class="hs_slider_title animated bounceInDown">Meet Our Doctor’s Team</h1>
                  <p class="lead animated pulse">Suspendisse eu sem tortor Etiam rhoncus viverra mi ac tempor turpis
                    rutrum in.<br> Vivamus porttitor rhoncus tellus, id ultricies eros gravida ut.</p>
                  <a href="#" class="btn btn-default animated fadeInRightBig">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="hlc_slider_details">
          <img class="animated fadeInDown" src="{{asset('landingpage/images/slider/slider2.jpg')}}" alt="...">
          <div class="hlc_slider_details_text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h1 class="hs_slider_title animated bounceInDown">Book your Appointment</h1>
                  <p class="lead animated pulse">Suspendisse eu sem tortor Etiam rhoncus viverra mi ac tempor turpis
                    rutrum in.<br> Vivamus porttitor rhoncus tellus, id ultricies eros gravida ut.</p>
                  <a href="#hs_appointment_form_link" class="btn btn-default animated fadeInRightBig">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--slider end-->
  <div class="container">
    
    <!--service end-->

    <!-- <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <h4 class="hs_heading">What we do</h4>
        <div class="hs_tab">
          <ul id="myTab" class="nav nav-tabs">
            <li ><a href="#services1" data-bs-toggle="tab" aria-expanded="true" class="active">services # 1</a></li>
            <li><a href="#services2" data-bs-toggle="tab">services # 2</a></li>
            <li><a href="#services3" data-bs-toggle="tab">services # 3</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="services1">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6"> <img width="228" height="252" src="{{asset('landingpage/images/service/1.jpg')}}"
                    alt="" /> </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <h4 class="hs_theme_color">Morbi id pulvinar enim. Vestibulum sed .</h4>
                  <p>Cras velit ligula, sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. Praesent aliquet
                  </p>
                  <p>sollicitudin leo, eu oare nibh sodales et. Vestibulum blandit,eu oare nibh sodales et. </p>
                  <div class="hs_margin_30"></div>
                  <a href="blog-single-post-rightsidebar.html" class="btn btn-default">Read More</a>
                  <div class="hs_margin_20"></div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="services2">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <h4 class="hs_theme_color">Morbi id pulvinar enim. Vestibulum sed .</h4>
                  <p>Cras velit ligula, sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. Praesent aliquet
                  </p>
                  <p>sollicitudin leo, eu oare nibh sodales et. Vestibulum blandit,eu oare nibh sodales et. </p>
                  <div class="hs_margin_30"></div>
                  <a href="blog-single-post-rightsidebar.html" class="btn btn-default">Read More</a>
                  <div class="hs_margin_20"> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6"> <img width="228" height="252" src="{{asset('landingpage/images/service/1.jpg')}}"
                    alt="" /> </div>
              </div>
            </div>
            <div class="tab-pane fade" id="services3">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12"> <img width="515" height="252" src="{{asset('landingpage/images/service/2.jpg')}}"
                    alt="" />
                  <h4 class="hs_theme_color">Morbi id pulvinar enim. Vestibulum sed .</h4>
                  <p>Cras velit ligula, sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. Praesent
                    aliquet. sollicitudin leo, eu oare nibh sodales et. Vestibulum blandit, </p>
                  <a href="blog-single-post-rightsidebar.html" class="btn btn-default">Read More</a>
                  <div class="hs_margin_20"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-6 col-md-12 col-sm-12">
        <h4 class="hs_heading" id="hs_appointment_form_link">Book an Appointment</h4>
        <div class="hs_appointment_form_div"> <img src="{{asset('landingpage/images/bg/appointment_form.jpg')}}" width="512" height="365"
            alt="" />
          <div class="hs_appointment_form">
            <form method="post">
              <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                  <div class="form-group">
                    <select class="form-control form-select" id="slider_select_dep" name="select_dep">
                      <option>Select Department</option>
                      <option value="Department 1">Department 1</option>
                      <option value="Department 2">Department 2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="slider_fname" name="fname"
                      placeholder="full Name  ( required )" required>
                  </div>
                  <div class="form-group">
                    <input type="text" id="slider_phone" name="phone" class="form-control"
                      placeholder="Phone (required)" required>
                  </div>
                  <div class="form-group">
                    <input type="email" id="slider_email" name="email" class="form-control"
                      placeholder="Email (required)" required>
                  </div>
                  <div class="form-group">
                    <input type="date" id="slider_date" name="date" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-3">
                  <button type="button" id="slider_book_apo" class="btn btn-default">Submit</button>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <p>Aenean facilisis sodales est nec gravida. Morbi vitae purus non est facilisis.</p>
                </div>
              </div>
              <p id="appointment_err"></p>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <!--Up Coming Events start-->
    <!-- <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h4 class="hs_heading">Up Coming Events</h4>
        <div class="up_coming_events">
          <div id="up_coming_events_slider" class="owl-carousel owl-theme">
            <div class="up_coming_events_slider_item">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="hs_event_date">
                    <h3>14</h3>
                    <p>Feb</p>
                  </div>
                </div>
              </div>
              <div class="hs_event_div">
                <div class="row">
                  <div class="col-lg-6 col-md-5 col-sm-6"> <img src="{{asset('landingpage/images/event/up_comming_event1.jpg')}}" alt="" />
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-12">
                    <h4>Pelln sque vitae dolor non.</h4>
                    <p>Cras sodaleut ligula, velit enim quis, neatis feugiat ante. Ut arcu nulla.Cras velit ligula,
                      sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. </p>
                    <a href="blog-single-post-rightsidebar.html" class="btn btn-default pull-right">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="up_coming_events_slider_item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="hs_event_date">
                    <h3>23</h3>
                    <p>Feb</p>
                  </div>
                </div>
              </div>
              <div class="hs_event_div">
                <div class="row">
                  <div class="col-lg-6 col-md-5 col-sm-6"> <img src="{{asset('landingpage/images/event/up_comming_event2.jpg')}}" alt="" />
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-12">
                    <h4>Pelln sque vitae dolor non.</h4>
                    <p>Cras sodaleut ligula, velit enim quis, neatis feugiat ante. Ut arcu nulla.Cras velit ligula,
                      sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. </p>
                    <a href="blog-single-post-rightsidebar.html" class="btn btn-default pull-right">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="up_coming_events_slider_item">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="hs_event_date">
                    <h3>24</h3>
                    <p>Feb</p>
                  </div>
                </div>
              </div>
              <div class="hs_event_div">
                <div class="row">
                  <div class="col-lg-6 col-md-5 col-sm-6"> <img src="{{asset('landingpage/images/event/up_comming_event3.jpg')}}" alt="" />
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-12">
                    <h4>Pelln sque vitae dolor non.</h4>
                    <p>Cras sodaleut ligula, velit enim quis, neatis feugiat ante. Ut arcu nulla.Cras velit ligula,
                      sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. </p>
                    <a href="blog-single-post-rightsidebar.html" class="btn btn-default pull-right">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="up_coming_events_slider_item">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="hs_event_date">
                    <h3>14</h3>
                    <p>Feb</p>
                  </div>
                </div>
              </div>
              <div class="hs_event_div">
                <div class="row">
                  <div class="col-lg-6 col-md-5 col-sm-6"> <img src="{{asset('landingpage/images/event/up_comming_event1.jpg')}}" alt="" />
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-12">
                    <h4>Pelln sque vitae dolor non.</h4>
                    <p>Cras sodaleut ligula, velit enim quis, neatis feugiat ante. Ut arcu nulla.Cras velit ligula,
                      sodaleut enim quis, venenatis feugiat ante. lus facilisis nisl. </p>
                    <a href="blog-single-post-rightsidebar.html" class="btn btn-default pull-right">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="customNavigation text-right"> <a class="btn_prev prev"><i class="fa fa-chevron-left"></i></a> <a
              class="btn_next next"><i class="fa fa-chevron-right"></i></a> </div>
        </div>
      </div>
    </div> -->
    <!--Up Coming Events end-->
    <!-- <div class="hs_margin_40"></div> -->

    <!--Our Doctor Team start-->
    <!-- <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h4 class="hs_heading" id="hs_meat_doc">Our Doctor Team</h4>
        <div class="our_doctor_team">
          <div id="our_doctor_team_slider" class="owl-carousel owl-theme">
            <div class="our_doctor_team_slider_item"> <img src="{{asset('landingpage/images/team/team_member1.png')}}" alt="" />
              <div class="hs_team_member_detail">
                <h3>Dr Johnathan Treat</h3>
                <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
                <a href="profile-single.html" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="our_doctor_team_slider_item"> <img src="{{asset('landingpage/images/team/team_member2.png')}}" alt="" />
              <div class="hs_team_member_detail">
                <h3>Dr. Edwin Spindrift</h3>
                <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
                <a href="profile-single.html" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="our_doctor_team_slider_item"> <img src="{{asset('landingpage/images/team/team_member3.png')}}" alt="" />
              <div class="hs_team_member_detail">
                <h3>Dr Johnathan Treat</h3>
                <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
                <a href="profile-single.html" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="our_doctor_team_slider_item"> <img src="{{asset('landingpage/images/team/team_member1.png')}}" alt="" />
              <div class="hs_team_member_detail">
                <h3>Dr. Edwin Spindrift</h3>
                <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
                <a href="profile-single.html" class="btn btn-default">Read More</a>
              </div>
            </div>
          </div>
          <div class="customNavigation text-center"> <a class="btn_prev prev"><i class="fa fa-chevron-left"></i></a> <a
              class="btn_next next"><i class="fa fa-chevron-right"></i></a> </div>
        </div>
      </div>
    </div> -->
    <!--Our Doctor Team end-->
    <!-- <div class="clearfix"></div> -->

    <!--Meet Our Partners start-->
    <!-- <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h4 class="hs_heading">Meet Our Partners</h4>
        <div class="our_partners">
          <div id="our_partners_slider" class="owl-carousel owl-theme">
            <div class="our_partners_slider_item"> <img src="{{asset('landingpage/images/partner/partner1.png')}}" alt="" width="142"
                height="40" /> </div>
            <div class="our_partners_slider_item"> <img src="{{asset('landingpage/images/partner/partner2.png')}}" alt="" width="142"
                height="40" /> </div>
            <div class="our_partners_slider_item"> <img src="{{asset('landingpage/images/partner/partner3.png')}}" alt="" width="142"
                height="40" /> </div>
            <div class="our_partners_slider_item"> <img src="{{asset('landingpage/images/partner/partner4.png')}}" alt="" width="142"
                height="40" /> </div>
            <div class="our_partners_slider_item"> <img src="{{asset('landingpage/images/partner/partner1.png')}}" alt="" width="142"
                height="40" /> </div>
          </div>
          <div class="customNavigation text-right"> <a class="btn_prev prev"><i class="fa fa-chevron-left"></i></a> <a
              class="btn_next next"><i class="fa fa-chevron-right"></i></a> </div>
        </div>
      </div>
    </div> -->
    <!--Meet Our Partners end-->
    <!-- <div class="hs_margin_60"></div>
  </div> -->
  <!-- <footer id="hs_footer">
    <div class="container">
      <div class="hs_footer_content">
        <div class="row">
          <div class="col-lg-12">
            <div class="hs_footer_menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog-categories.html">Blog</a></li>
                <li><a href="profile.html">Our profile</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="hs_footer_about_us">
              <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12 col-sm-12">
                  <h4 class="hs_heading">About Us</h4>
                  <a href="index.html"><img src="{{asset('landingpage/images/logo.svg')}}" alt="logo" width="180" height="41" /></a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 hs_about_us">
                  <div class="hs_margin_60"></div>
                  <p>Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam
                    ltricies lputate.Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis
                    commodo velante, tiam ltricies lputate. </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
                <h4 class="hs_heading">Get in touch !</h4>
                <div class="hs_contact_detail">
                  <p><i class="fa fa-map-marker"></i> 13/2 Elizabeth Street Melbourne VIC 3000, Australia</p>
                  <p><i class="fa fa-mobile-phone"></i> +61 3 8376 6284</p>
                  <div class="clearfix"></div>
                  <div class="hs_social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                <h4 class="hs_heading">Useful Links</h4>
                <div class="clearfix"></div>
                <div class="hs_footer_link">
                  <ul>
                    <li><a href="services.html">Pediatric Clinic</a></li>
                    <li><a href="services.html">Dental Clinic</a></li>
                    <li><a href="services.html">General Surgery</a></li>
                    <li><a href="services.html">Physiotherapy</a></li>
                    <li><a href="services.html">Ltricies lputate</a></li>
                  </ul>
                </div>
                <div class="hs_footer_link">
                  <ul>
                    <li><a href="blog-categories.html">Blog Categories</a></li>
                    <li><a href="services-two-column.html">services Two Column</a></li>
                    <li><a href="blog-single-post.html">Blog Single Post</a></li>
                    <li><a href="services.html">services Three Column</a></li>
                    <li><a href="blog-single-post-leftsidebar.html">Blog Leftsidebar</a></li>
                  </ul>
                </div>
                <div class="hs_footer_link">
                  <ul>
                    <li><a href="blog-single-post-rightsidebar.html">Blog Rightsidebar</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="columns.html">columns</a></li>
                    <li><a href="icon.html">icon</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h4 class="hs_heading">Twitter Widget</h4>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 hs_twitter_widget">
                <ul>
                  <li> <i class="fa fa-twitter"></i> <a href="#">
                      <p>@healthcare... Suspende potenti. Etiam ullamcorper scelerisque bibendumonec cursus, eleifend
                        semper. <br>
                        <br>
                        <strong>17 hours ago</strong>
                      </p>
                    </a> </li>
                  <li> <i class="fa fa-twitter"></i> <a href="#">
                      <p>@Hsoftindia... Suspende potenti. Etiam ullamcorper scelerisque bibendumonec cursus, eleifend
                        semper. <br>
                        <br>
                        <strong>2 min ago</strong>
                      </p>
                    </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- <div class="hs_copyright">Copyright © 2022 Health Care HTML Template. All Rights Reserved.</div> -->
  <!-- Main JS file start-->
  <script type="text/javascript" src="{{asset('landingpage/js/jquery-3.3.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/jquery.bxslider.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/jquery.mixitup.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/smoothscroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/single-0.1.0.js')}}"></script>
  <script type="text/javascript" src="{{asset('landingpage/js/custom.js')}}"></script>
</body>


</html>