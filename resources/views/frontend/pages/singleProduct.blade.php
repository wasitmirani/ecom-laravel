
@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>$product->name])

@endcomponent
<section class="shop-single section-padding pt-3">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="shop-detail-left">
               <div class="shop-detail-slider">
                  <div class="favourite-icon">
                     <a class="fav-btn" title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="59% OFF"><i class="mdi mdi-tag-outline"></i></a>
                  </div>
                  <div id="sync1" class="owl-carousel">
                      @foreach ($product->productImages as $productimg)
                             <div class="item"><img alt="" src="{{$productimg->thumbnail}}" class="img-fluid img-center"></div>
                      @endforeach
                    
                
                  </div>
                  <div id="sync2" class="owl-carousel">
                        @foreach ($product->productImages as $productimg)
                             <div class="item"><img alt="" src="{{$productimg->thumbnail}}" class="img-fluid img-center"></div>
                      @endforeach
                    
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="shop-detail-right">
                @if(!empty($product->category))
            <span class="badge badge-success">{{$product->category->name}}</span>
            @endif
              
               <h2>{{$product->name}} (Pouch)</h2>
            <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{$product->quantityPerUnit}}</h6>
                
       
               
                 <p class="offer-price mb-0">Price : <span class="text-success">{{env('CURRENCY')}}{{ $product->unitPrice-$product->discount_price}}</span></p>
              
                @if($product->discount_price>0)
                <span class="regular-price">${{$product->unitPrice}}</span>
                @endif
            </p>
            @if($product->unitsInStock>0)
            <button type="button" onclick="addtocart({!!$product->id!!})" class="btn btn-secondary btn-sm">
                <i class="mdi mdi-cart-outline">
                </i> Add To
                Cart</button>
            @else
            <button onclick="outStock('{!!$product->name!!}')" type="button" class="btn btn-danger btn-sm">
                <i class="mdi mdi-lock">
                </i> Out of
                Stock</button>
           @endif
               {{-- <a href="checkout.html"><button type="button" class="btn btn-secondary btn-lg"><i class="mdi mdi-cart-outline"></i> Add To Cart</button> </a> --}}
               <div class="short-description">
                  <h5>
                     Quick Overview
                     <p class="float-right">Availability:
                            @if($product->unitsInStock>0)
                               <span class="badge badge-success">      In Stock</span>
                        @else
                            <span class="badge badge-danger">           Out of Stock</span>
                        @endif
                    </p>
                  </h5>
                  <p>
                  <p class="mb-0"> {{$product->description}}</p>
               </div>
               <h6 class="mb-3 mt-4">Why shop from {{config('app.name')}}?</h6>
               <div class="row">
                  <div class="col-md-6">
                     <div class="feature-box">
                        <i class="mdi mdi-truck-fast"></i>
                        <h6 class="text-info">Free Delivery</h6>
                        <p></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="feature-box">
                        <i class="mdi mdi-basket"></i>
                        <h6 class="text-info">100% Guarantee</h6>
                        <p></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection