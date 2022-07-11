<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>

                    <ul class="contact-info">
                        <li>
                            Address: 20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            Email: <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="{{route('frontend.about')}}"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <!-- <li>
                            <a href="{{route('frontend.about')}}"><i class="fa fa-angle-right"></i>Service</a>
                        </li> -->
                        <li>
                            <a href="{{route('frontend.properties')}}"><i class="fa fa-angle-right"></i>Properties Listing</a>
                        </li>
                        <li>
                            <a href="{{route('frontend.contact')}}"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                        <!--
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Property Details</a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Properties</h4>
                    @foreach($recent as $rec)
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="{{ asset(env('UPLOAD_PATH').'/' . $rec->photo) }}" alt="sub-property-2">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="{{route('frontend.property_detail', ['id' => $rec->id])}}">{{$rec->name}}</a>
                            </h5>
                            <p>{{$rec->created_at}}</p>
                            <p> <strong>${{$rec->price}}</strong></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  2018 <a href="http://themevessel.com/" target="_blank">Theme Vessel</a>. Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form  id='search'>
        @csrf
        <input type="search" class="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('frontend/img/property-1.jpg') }}" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('frontend/img/property-1.jpg') }}" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    var APP_URL = {!! json_encode(url('/')) !!}
    $("#search").submit(function(){
        var value=$('.search').val();
      window.location.href = APP_URL+'/property_search/'+value;
      
    });    
</script>


<!-- External JS libraries -->
<script src="{{ asset('frontend/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.selectBox.js') }}"></script>
<script src="{{ asset('frontend/js/rangeslider.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.filterizr.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/backstretch.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('frontend/js/particles.min.js') }}"></script>
<script src="{{ asset('frontend/js/typed.min.js') }}"></script>
<script src="{{ asset('frontend/js/dropzone.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('frontend/js/leaflet.js') }}"></script>
<script src="{{ asset('frontend/js/leaflet-providers.js') }}"></script>
<script src="{{ asset('frontend/js/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/maps.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="{{ asset('frontend/js/ie-emulation-modes-warning.js') }}"></script>
<!-- Custom JS Script -->
<script  src="{{ asset('frontend/js/app.js') }}"></script>

</body>
</html>