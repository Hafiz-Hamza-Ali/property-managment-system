@include('frontend/include/header')
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
            <li><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form action="{{route('frontend.invite')}}" method="POST" >
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" id='name' name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" id='email' name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" id='subject' name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" id='number' name="number" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" id='message' name="content" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <p> Salam street Al Firdous Tower Abu Dhabi</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Office<a href="tel:0477-0477-8556-552">: +971 58 909 0428</a> </p>
                            <p>Mobile<a href="tel:+0477-85x6-552">: +971 50 710 1926</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="#">info@volareuae.com</a></p>
                            <p><a href="#">http://volareuae.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.648196223201!2d54.369254014868396!3d24.497643484226362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e665f0223c5a1%3A0x220867721f16a675!2sAl%20Ferdous%20Tower%20-%20Al%20Salam%20Street%20-%20Zone%201%20-%20E9-02%20-%20Abu%20Dhabi%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1656852704041!5m2!1sen!2s" width="1650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- Google map end -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    var APP_URL = {!! json_encode(url('/')) !!}
    $("form").submit(function(){
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
      //  let user_id=$('#user_id').val();
        let name=$('#name').val();
        let email=$('#email').val();
        let number=$('#number').val();
        let subject=$('#subject').val();
        let message=$('#message').val();
        console.log(name);
        console.log(email);
        console.log(number);
        console.log(subject);
        console.log(message);
        // alert(name);
        $.ajax({
            type: "POST",
            url: APP_URL+'/property_detail/invite',
            data: { name:name,email:email,number:number,subject:subject,content:message }, 
            success: function( msg ) {
               location.reload(); 
            }
        });
    });    

    </script>
<!-- Footer start -->
@include('frontend/include/footer')