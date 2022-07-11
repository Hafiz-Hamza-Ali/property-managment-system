@include('frontend/include/header')
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Our Team</h1>
            <ul class="breadcrumbs">
            <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">Team</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- agent start -->
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Team Members</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="#">
                            <img src="{{ asset('frontend/img/avatar/ayub.jpg') }}" alt="avatar-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Muhammad Ayub Malik</a></h5>
                        <p>Managing Director</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="#">
                            <img src="{{ asset('frontend/img/avatar/nisar.jpg') }}" alt="avatar-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Nisar Ali</a></h5>
                        <p>Ceo</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="#">
                            <img src="{{ asset('frontend/img/avatar/salman.jpg') }}" alt="avatar-7" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Muhammad Salman</a></h5>
                        <p>Head Of Sales</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="#">
                            <img src="{{ asset('frontend/img/avatar/arslan.jpg') }}" style="height: 300px;" alt="avatar-11" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Muhammad Arslan</a></h5>
                        <p>Head of Digital Marketing</p>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
<!-- agent end -->

<!-- Counters start -->
<div class="counters overview-bgi" style="background-image: url({{ asset('frontend/img/bg-photo-2.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">500</h1>
                    <h5>Lines of Sale</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-badge"></i>
                    <h1 class="counter">254</h1>
                    <h5>Listings For Rent</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-call-center-agent"></i>
                    <h1 class="counter">510</h1>
                    <h5>Agents</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-job"></i>
                    <h1 class="counter">94</h1>
                    <h5>Brokers</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->



<!-- Footer start -->
@include('frontend/include/footer')