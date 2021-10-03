
@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>'About Us'])

@endcomponent
<section class="section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="pl-4 col-lg-5 col-md-5 pr-4">
                <img class="rounded img-fluid" src="{{asset('frontend/img/logo.png')}}" alt="">
            </div>
            <div class="col-lg-6 col-md-6 pl-5 pr-5">
                <h2 class="mt-5 mb-5 text-secondary"></h2>
                <h5 class="mt-2">Our Vision</h5>
                <p>
                   is an Online grocery store and super market in Sukkur, Sindh, Pakistan. You order online and we will deliver grocery anywhere in Karachi. Same Day delivery and Next Day deliver. No minimum order limit. Free delivery on orders above Rs. 1000. Payment methods Cash on Delivery.
                </p>
                <h5 class="mt-4">Our Goal</h5>
                <p>
                    The staff at  consider ourselves Make Up Artists & loved, & enjoy helping the everyday person learn how to use makeup to enhance their own unique beauty & look their best.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="section-padding">
    <div class="section-title text-center mb-5">
        <h2>What We Provide?</h2>
        <p> is a goal and passion to provide a wide spectrum of natural make up & good quality make up products & hair.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4"><i class="text-success mdi mdi-shopping mdi-48px"></i></div>
                <h5 class="mt-3 mb-3 text-secondary">Best Prices & Offers</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4"><i class="text-success mdi mdi-earth mdi-48px"></i></div>
                <h5 class="mb-3 text-secondary">Wide Assortment</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4"><i class="text-success mdi mdi-refresh mdi-48px"></i></div>
                <h5 class="mt-3 mb-3 text-secondary">Easy Returns</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4"><i class="text-success mdi mdi-truck-fast mdi-48px"></i></div>
                <h5 class="mb-3 text-secondary">Free & Next Day Delivery</h5>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4"><i class="text-success mdi mdi-basket mdi-48px"></i></div>
                <h5 class="mt-3 mb-3 text-secondary">100% Satisfaction Guarantee</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4"><i class="text-success mdi mdi mdi-tag-heart mdi-48px"></i></div>
                <h5 class="mt-3 mb-3 text-secondary">Great Daily Deals Discount</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
            </div>
        </div>
    </div>
</section>

@endsection
