
@if(!empty($product))
<div class="product">
    <a href="{{route('product.view',['id'=>$product->id,'slug'=>$product->slug])}}">
        <div class="product-header">
            @if(!empty($product->category))
            <span class="badge badge-danger">{{$product->category->name}}</span>
            @endif
       <lazyload-component
            :imageurl='{!! !empty($product->productImages[0]) ? json_encode($product->productImages[0]->thumbnail) : "" !!}'>
             </lazyload-component>

            @if($product->unitsInStock>0)
            <span class="veg text-success mdi mdi-circle">In Stock</span>
            @else
            <span class="veg text-danger mdi mdi-circle">Out of Stock</span>
            @endif
        </div>
        <div class="product-body">
            <h5>{{Str::limit($product->name,!empty($title_limit) ? $title_limit : 25, '....')}}</h5>
            <h6 class="flex"><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{Str::limit($product->quantityPerUnit, !empty($unitbox) ? $unitbox : 15,'....')}}</h6>
        </div>
    </a>
        <div class="product-footer">
            <p class="offer-price mb-0">{{env('CURRENCY')}}{{ $product->unitPrice-$product->discount_price}} <i class="mdi mdi-tag-outline"></i>

            @if($product->discount_price>0)
                <span class="regular-price">{{env('CURRENCY')}}{{$product->unitPrice}}</span>
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
        </div>

</div>
@endif


@push('styles')
<style>
    .product-header .badge {
    background: #ff57220f none repeat scroll 0 0;
    border: 1px solid #1df125;
    border-radius: 2px;
    color: #f72f94;
    font-size: 12px;
    font-weight: 500;
    left: 20px;
    padding: 4px 10px;
    position: absolute;
    top: 20px;
    z-index: 000;
</style>
@endpush
