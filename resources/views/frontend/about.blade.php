@include('frontend/include/header')
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>About Us</h1>
            <ul class="breadcrumbs">
            <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- About us start -->
<div class="about-us content-area-8 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="properties-service-v">
                    <img src="{{ asset('frontend/img/admin.png') }}" alt="admin" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-text more-info">
                    <h3>Why Choose Us?</h3>
                    <div id="faq" class="faq-accordion">
                        <div class="card m-b-0">
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                                    Sales 
                                </a>
                            </div>
                            <div id="collapse1" class="card-block collapse">
                                <p>Your Dream, We Deliver!Let us, Build Your ‘DREAM HOUSE’.</p>
                            </div>

                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                    Paint
                                </a>
                            </div>
                            <div id="collapse2" class="card-block collapse">
                                <p>You Can Select the Product according to Application Requirement and Budget. We Present the Unique Online Paint Buying Experience.</p>
                            </div>

                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                    Plumbing
                                </a>
                            </div>
                            <div id="collapse3" class="card-block collapse">
                                <p>You Can Avail Our Plumbing Services Anywhere In Lahore With Just A Few Clicks. We Have Transparent And Fixed Pricing For Your Satisfaction. Get Plumbing Service at home. Bathroom Plumbing. Donkey-pump Plumbing.</p>
                            </div>

                            <div class="card-header bd-none">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                    Electrical Work
                                </a>
                            </div>
                            <div id="collapse4" class="card-block collapse">
                                <p>We provide you with the best solution and a range of electric maintenance and repair solutions. Our professionals come with years of experience to provide you.</p>
                            </div>
                            <div class="card-header bd-none">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse5">
                                    Real Estate Brokerage
                                </a>
                            </div>
                            <div id="collapse5" class="card-block collapse">
                                <p>A broker may work for a commercial or residential seller and/or buyer. The duties vary, depending on the type of broker you are.</p>
                            </div>
                            <div class="card-header bd-none">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse6">
                                    All kind of facility managment
                                </a>
                            </div>
                            <div id="collapse6" class="card-block collapse">
                                <p>We deal in integrated facility management, hr services, hvac, mechanical, utility supply and preventive maintenance in Islamabad, Rawalpindi & Lahore.</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<!-- agent start -->
<!-- <div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="agent-photo">
                        <a href="#">
                            <img src="{{ asset('frontend/img/avatar/avatar-5.jpg') }}" alt="avatar-5" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Martin Smith</a></h5>
                        <p>Web Developer</p>
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
                            <img src="{{ asset('frontend/img/avatar/avatar-6.jpg') }}" alt="avatar-6" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">John Pitarshon</a></h5>
                        <p>Creative Director</p>
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
                            <img src="{{ asset('frontend/img/avatar/avatar-7.jpg') }}" alt="avatar-7" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Maria Blank</a></h5>
                        <p>Office Manager</p>
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
                            <img src="{{ asset('frontend/img/avatar/avatar-11.jpg') }}" alt="avatar-11" class="img-fluid">
                        </a>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Karen Paran</a></h5>
                        <p>Support Manager</p>
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
</div > -->
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

<!-- Testimonial 3 start -->
<div class="testimonial testimonial-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="lead">
                                This team sold my house and  helped me to buy a new one. Two of the hardest working people in the business. They treat you like family, and work as hard as they can for you. If you are going to sell of buy a house I recommend you go with them and the Volare Real Estate Team. If I was ever going to sell or buy again they would be the first people I would call.
                                </p>
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/avatar/avatar-10.jpg') }}" alt="avatar-2" class="img-fluid rounded">
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>
                                <div class="author-name">
                                Haris thomson
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                We are so lucky that we found Arslan of the  Volare Real Estate Team, he made buying our first home an enjoyable and easy experience. Quick to respond and will do anything to help, we highly recommend!
                                </p>
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/avatar/avatar.jpg') }}" alt="avatar" class="img-fluid rounded">
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>
                                <div class="author-name">
                                    Martin Smith
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                We had the pleasure of working with Salman from the Volare Real Estate Team and he was fantastic! We are first time home buyers and salman answered every question we had. He was very knowledgable and honest with his opinions about all the homes we viewed. We highly recommend!
                                </p>
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/avatar/avatar-3.jpg') }}" alt="avatar-3" class="img-fluid rounded">
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>
                                <div class="author-name">
                                    Karen Paran
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->

<!-- Footer start -->
@include('frontend/include/footer')