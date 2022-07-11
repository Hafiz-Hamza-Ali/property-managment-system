@include('frontend/include/header')
<!-- main header end -->
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties Grid</h1>
            <ul class="breadcrumbs">
            <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">Properties Grid</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading">Properties Grid</span>
                    </h4>
                </div>
                <!--<div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="sorting-options clearfix">
                        <a href="properties-list-fullwidth.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                        <a href="properties-grid-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="search-area">
                        <select class="selectpicker search-fields" name="location">
                            <option>High to Low</option>
                            <option>Low to High</option>
                        </select>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="subtitle">
            {{count($properties)}} Result Found
        </div>
        <div class="row">
            @foreach($properties as $property)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                        @if($property->pro_type==0)
                            <div class="tag button alt featured">Featured</div>
                            @endif
                            <div class="price-ratings-box">
                                <p class="price">
                                    $ {{$property->price}}
                                </p>
                                <!-- <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div> -->
                            </div>
                            <img src="{{ asset(env('UPLOAD_PATH').'/' . $property->photo) }}" style="height: 211px;/* width: 50px; */" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="{{route('frontend.property_detail', ['id' => $property->id])}}" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                           <!-- <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>-->
                            <div class="property-magnify-gallery">
                                <a href="admin/images/property_image/path" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="{{route('frontend.property_detail', ['id' => $property->id])}}">{{$property->name}}</a>
                        </h1>
                        <div class="location">
                            <a href="{{route('frontend.property_detail', ['id' => $property->id])}}">
                                <i class="fa fa-map-marker"></i>{{$property->address}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property->bedroom}} : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property->area}} : Area
                            </li>
                            <li>
                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>{{$property->sqft}} Sq Ft
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> {{$property->bathroom}} : Bathroom
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i>{{\Illuminate\Support\Str::limit($property->description, 150)}}
                        </a>
                        <span>
                                <i class="fa fa-calendar-o"></i> {{$property->created_at}} years ago
                            </span>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</div>
<!-- Properties list fullwidth end -->

<!-- Footer start -->
@include('frontend/include/footer')