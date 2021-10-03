
@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>'Products'])

@endcomponent
@php
$categories=getCategories();
@endphp
<product-component :categories="{{$categories}}"></product-component>

<section class="product-items-slider section-padding bg-white border-top">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">FEATURED PRODUCTS <span class="badge badge-primary">Shopping Now</span>
                <a class="float-right text-secondary" href="{{route('products')}}">View All</a>
            </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach ($featuredProducts as $product)
            <div class="item">
                @component('frontend.components.productCard',['product'=>$product,'title_limit'=>20 ,'unitbox'=>10])

                @endcomponent
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
