@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>'Contact Us'])

@endcomponent


<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <h3 class="mt-1 mb-5">Get In Touch</h3>
                  @if(!empty(getAppSetting()->address1))
                <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>

                <p>
                    {{getAppSetting()->address1 ." ".getAppSetting()->address2 . "" .getAppSetting()->zipcode . " , " . getAppSetting()->city ." ,".getAppSetting()->state." " . getAppSetting()->country}}
                </p>
                @endif
                   @if(!empty(getAppSetting()->contact))
                <h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
                <p>{{getAppSetting()->contact}}</p>
                @endif
                @if(!empty(getAppSetting()->contact))
                <h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
                <p>{{getAppSetting()->contact}}</p>
                @endif
                  @if(!empty(getAppSetting()->email))
                <h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
                <p><a href="mailto: {{getAppSetting()->email}}">{{getAppSetting()->email}}</a></p>
                @endif
                <h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
                <p>{{url('/')}}</p>
                <div class="footer-social"><span>Follow : </span>
                    <a href="#"><i class="mdi mdi-facebook"></i></a>
                    <a href="#"><i class="mdi mdi-twitter"></i></a>
                    <a href="#"><i class="mdi mdi-instagram"></i></a>
                    {{-- <a href="#"><i class="mdi mdi-google"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/d/u/0/viewer?ie=UTF8&hl=en&msa=0&mid=18fyyXsqD4A-nY2T1KqHzve1z9qg&ll=40.69785166022126%2C-73.97968099999999&z=11"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding  bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                <h2>Contact Us</h2>
            </div>
            <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate="">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Full Name" class="form-control" id="name" required=""
                               data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="control-group form-group col-md-6">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <div class="controls">
                            <input type="tel" placeholder="Phone Number" class="form-control" id="phone" required=""
                                   data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group col-md-6">
                        <div class="controls">
                            <label>Email Address <span class="text-danger">*</span></label>
                            <input type="email" placeholder="Email Address" class="form-control" id="email" required=""
                                   data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message <span class="text-danger">*</span></label>
                        <textarea rows="4" cols="100" placeholder="Message" class="form-control" id="message"
                                  required="" data-validation-required-message="Please enter your message"
                                  maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>

                <button type="submit" class="btn btn-success">Send Message</button>
            </form>
        </div>
    </div>
</section>

@endsection
